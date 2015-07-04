
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
	int i;

	for(i=0; i<5; i++){
		temp[i] = input[i];
	}
	if(temp[0]==temp[4]&&temp[1]==temp[3])
	return true;
	else false;
}

boolean countNum(char* input)
{
	char * string, temp;
	int i;

	for(i=0; i<5; i++){
		temp[i] = input[i];
	}
	
	if(temp[0]==temp[4]&&temp[1]==temp[3])
	return true;
	else false;
}
