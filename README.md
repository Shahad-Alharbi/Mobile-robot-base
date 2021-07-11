# Mobile-robot-base
This repository is about a Fencing Robot Control Panel
## Design the control interface to move the robot base:
I designed an interface of the Mobile robot base to control the direction of the base and make it moving depending on the interface. 
![image](https://user-images.githubusercontent.com/85777087/125195828-24f97c80-e260-11eb-8408-fad8b9312c1f.png)

## Create a database to control the robot base:
I created a database called control with a table called Base. The table contains 6 columns: Id, Right, Left, Forward, Backward, and Stop. The column Id is a primary key of type int and the rest of the columns are of type varchar. 
![image](https://user-images.githubusercontent.com/85777087/125196573-1bbddf00-e263-11eb-88f2-b807e15429aa.png)

## Connecting the database with the control interface:
When we click on one of the direction buttons such as Forward, the data will be saved in the database
![image](https://user-images.githubusercontent.com/85777087/125197413-25951180-e266-11eb-91c8-bdcdd462e8e8.png)

## Create PHP pages to connect the database with the hardware (Base):
After Saved the data on the database, I connected the database with the hardware by PHP pages to moving the robot base 
![image](https://user-images.githubusercontent.com/85777087/125197659-4f026d00-e267-11eb-88b2-ff4cd6b24a3c.png)

## Integrating the robot arms control panel with the robot base control panel in one interface:
I created a control interface with two buttons to move to the arm control interface and the base control interface
![image](https://user-images.githubusercontent.com/85777087/125197822-dcde5800-e267-11eb-97c3-39748d6c3afa.png)

After I merged the interfaces there was a difference in the layout of the interfaces. Therefore, I changed the interface of the arm to be consistent with the rest of the interfaces.
![image](https://user-images.githubusercontent.com/85777087/125197886-2dee4c00-e268-11eb-92c9-3ed3e39d72ae.png)
