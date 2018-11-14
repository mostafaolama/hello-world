<?php
/**
 * Created by PhpStorm.
 * User: Mostafa
 * Date: 11/14/2018
 * Time: 4:28 PM
 */
#include <iostream>

using namespace std;

int main() {

int n; n;//is number of all ticket
int m; //the ticket we want to choose
n = 10;
m = 7;


int array[10] = {25,27,3,12,9,15,6,30,21,19};


int array_temp[3] = {0,0,0};

for(int i=0; i<n; i++){

    array_temp[0] = array[i];
    for(int j = i+1 ; j<n;j++){
        array_temp[1] = array[j];
        if((array_temp[0] +array_temp[1]) >= 50)
            continue;
        else {
            for(int k = j+1 ; k<n; k++){
                array_temp[2] = array[k];
                int sum = array_temp[0] + array_temp[1] + array_temp[2] ;
                if(sum == 50){
                    cout<<array_temp[0]<<" + "<<array_temp[1]<<" + "<<array_temp[2]<<" = "<<sum<<endl;
                }
                else
                    cout<<i<<" "<<j<<" "<<k<<"-------"<<array_temp[0]<<" + "<<array_temp[1]<<" + "<<array_temp[2]<<" = "<<sum<<endl;


            }
        }


    }
}
 cout<<"end"<<endl;
}
