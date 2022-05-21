from flask import Flask, request
import json
import csv
app = Flask(__name__)


def get_json_from_csv():
    json_response = []
    fieldNames = ["fname","lname","age","state","email", "handler"] 
    with open('dataset.csv') as csvFile: 
        reader = csv.DictReader(csvFile, fieldNames) 
        for row in reader:
            # Skipping the first row.
            if row["fname"] == "fname":
                continue
            json_response.append(row)
    return json_response

@app.route("/people", methods=['get'])
def get_product():

	return json.dumps(get_json_from_csv())

if __name__ == '__main__':
	app.run(host='0.0.0.0', port=8989)