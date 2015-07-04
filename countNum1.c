#include <stdio.h>
#include <stdlib.h>
#include <string.h>
int main()
{
	boolean result;
	char * input = "huouh";
	result = countNum(input); 
	printf("%d",result);
	exit(0);
}

boolean countNum(char* input)
{
	char * string, temp;
	int i,j;
	int count = 0;

	for(i=0; i<2; i++){
		for(j=4-i; j>2; j--)
		{
			if((input[i] == input[j])) 
				count++;
		}
	}
	if(count ==2) return true;
	else return false;

}
