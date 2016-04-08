//
//  main.cpp
//  Assignment 3
//
//  Created by Dominique Jones on 1/29/15.
//  Copyright (c) 2015 Dominique L. Jones. All rights reserved.
//

#include <iostream>
#include <fstream>
#include <string>
#include <iomanip>

using namespace std;

int main()
{
    ifstream inFile;
    ofstream outFile;
    
    string firstName;
    string lastName;
    double currentSalary;
    int increasePercent;
    double updatedSalary;
    
    inFile.open("Ch3_Ex7Data.txt");
    outFile.open("Ch3_Ex7Output.dat");
    
    outFile << fixed << showpoint;
    outFile << setprecision(2);
    
    cout << "Processing data" << endl;
    
    updatedSalary = (currentSalary * increasePercent/100);
    
    inFile >> lastName >> firstName >> updatedSalary;
    outFile << firstName << " " << lastName
    << " " << updatedSalary << endl;
    
    inFile.close();
    outFile.close();
    
    
    return 0;
}
