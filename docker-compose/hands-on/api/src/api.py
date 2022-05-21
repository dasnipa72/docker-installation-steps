from flask import Flask, request
import json
import csv
import os
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
def get_people():

	return json.dumps(get_json_from_csv())

if __name__ == '__main__':
	debug = os.environ.get("DEBUG", False)
	app.run(host='0.0.0.0', debug=debug, port=8989)