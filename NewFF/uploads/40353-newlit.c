#include<stdio.h>

struct node
{
char line[200];
struct node *node;
};
  
  struct node *head,*end;

		void dispay()
		{
			struct node *temp=head;
			int i=0;			
			while(temp)	
			{	
			printf("(%d),%s",i++,temp->line);
			temp=temp->next;
}
}
		void append(char line[])
		{
			struct node *newnode;
			newmode=malloc(sizeof(struct node));
			strcpy=(newnode->line,line);
			newnode->nextx=NULL;
			if(head==NULL)
			{
			head=end=newnode;
			}
			else
			{
			end->next=newnode;
			end=newnosde;
			}
		}

			void load(char fnm[])
			{
				FILE *fp;
				char line[100];
				fp=fopen(fnm,"r");
				if(fp)
				{
				while(fgets(fnm,100,fp)!=NULL)
				Append(line);
				fclose();
}
}
