import csv
import json

def csv2json():
    data = []
    
    csvFile = r"trialList_subject1.csv"
    
    with open(csvFile, encoding = 'utf-8') as reader:
        csvReader = csv.DictReader(reader)
        
        for row in csvReader:
            data.append([item[1] for item in list(row.items())[1:]])
    
    jsonFile = r"trialList_subject1.json"
    with open(jsonFile, 'w', encoding = 'utf-8') as writer:
        writer.write(json.dumps(data))

if __name__ == "__main__":
    csv2json()
