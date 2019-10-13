import java.util.Arrays;
public class sort 
{
	public static void main(String[] args) 
	{
		int i[]={9,8,7,6,5,4,3,2,1};
		for(int number:i)
		{
			System.out.println("Numbers:" + number);			
		}
		Arrays.sort(i);
		System.out.println("Sorted Array is:");
		for(int number:i)
		{
			System.out.println("Numbers:" + number);	
		}
	}
}
