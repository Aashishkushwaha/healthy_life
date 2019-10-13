public class student 
{
	int roll;
	String name;
	float perc;
	static int cnt=0;
	student()
	{
		cnt++;
		System.out.println("\nCount:" +cnt);
	}
	
	student(int roll,String name,float perc)
	{
		this.roll=roll;
		this.name=name;
		this.perc=perc;
		cnt++;
		System.out.println("Roll.no:" + roll +"\tName:" + name + "\tPercentage:" + perc);
		System.out.println("\nCount:" +cnt);
	};

	public static void main(String[] args) 
	{
		student s1=new student(1,"Abhay",99);		
		student s2=new student();
	}
}
