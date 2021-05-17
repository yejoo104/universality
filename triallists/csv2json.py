import csv
import json

def csv2json(csvFile, jsonFile):
    data = []
    
    with open(csvFile, encoding = 'utf-8') as reader:
        csvReader = csv.DictReader(reader)
        
        for row in csvReader:
            data.append([item[1] for item in list(row.items())[1:]])
    
    with open(jsonFile, 'w', encoding = 'utf-8') as writer:
        writer.write("var triallist = " + json.dumps(data))

if __name__ == "__main__":
    triallist_num = 100
    
    for i in range(1, triallist_num + 1):
        csvFile = "trialList_subject" + str(i) + ".csv"
        jsonFile = "trialList_subject" + str(i) + ".js"
        csv2json(csvFile, jsonFile)
