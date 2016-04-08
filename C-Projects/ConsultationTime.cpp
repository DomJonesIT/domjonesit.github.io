//
//  main.cpp
//  DLJ Assignment 6
//
//  Created by Dominique Jones on 2/22/15.
//  Copyright (c) 2015 Dominique L. Jones. All rights reserved.
//

#include <iostream>
#include <iomanip>
    
using namespace std;
    
double billAmount();
    
int main()
{
    double income;
    double hourlyRate;
    double consultingTime;
    double amountDue;
        
        
    cout << "Enter your income: ";
    cin >> income;
    cout << endl;
        
    cout << "Enter your hourly rate: ";
    cin >> hourlyRate;
    cout << endl;
        
    cout << "Enter the consulting time in minutes: ";
    cin >> consultingTime;
    cout << endl;
    
    if (income <= 25000 || (income <= 25000 && consultingTime > 30))
        amountDue = billAmount();
    cout << "Your billing amount = $"
    << amountDue << endl;
    
    
    
    
    return 0;
        
    
}

double billAmount()
{
    double income;
    double hourlyRate;
    double consultingTime;
    double billingAmount;
        
    if (income <= 25000 && consultingTime > 30)
        billingAmount = (hourlyRate * .4) * (consultingTime/60 - 30/60);
    if (income <= 25000 && consultingTime <= 30)
        billingAmount = 0.00;
    if (income > 25000 && consultingTime <= 20)
        billingAmount = 0.00;
    if (income > 25000 && consultingTime > 20)
        billingAmount = (hourlyRate * .7) * (consultingTime/60 - 20/60);
        
    return billingAmount;
        
    }
