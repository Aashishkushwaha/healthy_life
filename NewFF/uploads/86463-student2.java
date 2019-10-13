import java.io.*;
public class student2 
{
	int roll;
	String name;
	float perc;
	static int cnt;
	
	student2()
	{
		cnt++;
		System.out.println("\nCount:" + cnt);
	}
	
	student2(int roll,String name,int perc)
	{
		this.roll=roll;
		this.name=name;
		this.perc=perc;
		cnt++;
		System.out.println("Roll.no:" + roll +"\tName:" + name + "\tPercentage:" + perc);
		System.out.println("\nCount:" + cnt);
	}
	
	public String toString()
	{
		return "Roll.no:" + roll +"\tName:" + name + "\tPercentage:" + perc + "Count:" + cnt;
	}
	
	public static void main(String[] args) throws Exception
	{
		System.out.println("Enter How many entries");
		BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
		int n=Integer.parseInt(br.readLine());	
		student2 s[]=new student2[n];
		for(int i=0;i<s.length;i++)
		{
			s[i]=new student2();
			System.out.println("Enter Rollno.");
			s[i].roll=Integer.parseInt(br.readLine());
			System.out.println("Enter Name");
			s[i].name=br.readLine();
			System.out.println("Enter percentage");
			s[i].perc=Integer.parseInt(br.readLine());
			System.out.println("Roll.no:" + s[i].roll +"\tName:" + s[i].name + "\tPercentage:" + s[i].perc);	
		}
	}
}	