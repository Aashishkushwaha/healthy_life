package sem2;

import java.sql.CallableStatement;
import java.sql.Connection;
import java.sql.DatabaseMetaData;
import java.sql.DriverManager;
import java.sql.Statement;

public class jdbc2 
	{
	public jdbc2() 
	{
	}
	public static void main(String[] args) 
	{
		Connection cn;
		Statement st;
		CallableStatement cs;
		DatabaseMetaData dm;
		try
		{
		Class.forName("org.postgresql.Driver");
		cn=DriverManager.getConnection("jdbc:postgresql://localhost/pratik","pratik","");
		st=cn.createStatement();
		
		cn.setAutoCommit(false);	
		cs=cn.prepareCall("{call sq(6)}");
		
		cs.execute();
		dm=cn.getMetaData();
		System.out.println("Driver name :"+dm.getDriverName());
		}
		catch(Exception e)
		{
		e.printStackTrace();	
	   }
	}
	}

