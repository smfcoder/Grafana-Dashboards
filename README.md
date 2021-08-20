# Grafana-Dashboards
Visualizing the Data from MySQL (Time series and Static both) and Windows Monitoring System using windows node exporter and Prometheus.
To implement the live time series data source we will be using Ajax to call the PHP file every 5 seconds and insert the query in Mysql database.

# YouTube Video : 
https://youtu.be/ViEJoaL0QuE

# Grafana Dashboards
Data sources used : <br>
1) MySQL - <br>
       a) Implemented both Time series and Static data from Mysql.<br>
       b) To connect the Mysql database to grafana we have used XAMPP Control Panel from which MySql runs on Port no.3306, enter those credentials while connecting the data source           in grafana.<br>
       c) Run the XAMPP server open Phpmyadmin and import the SQL file to get the dummy data and use those tables to create panels in the dashboard.<br>
       d) To implement the time series data use the following process:<br>
                 - Copy the file index.php and select.php in the htdocs folder in Xampp.<br>
                 - Edit the database configuration in select.php file (default are username : root and password : NULL).<br>
                 - Run the index.php on localhost (http://localhost/index.php)<br>
                 - Connect the MySql with grafana data source, create the new dashboard and use the table name and column names to fetch the data.<br>

2) Prometheus - <br>
        a) To implement windows monitoring system using the Windows node exporter for exporting the windows metrics.<br>
        b) Download Windows Node exporter from :   https://github.com/prometheus-community/windows_exporter/releases<br>
           (Download according to the OS requirements)<br>
        c) Download Prometheus from (https://prometheus.io/download/)   and run the file as shown in the video.<br>
        d) Run the Windows node expoerter on http://localhost:9182/metrics<br>
        e) Run Prometheus on http://localhost:9090/target<br>
        

# Dashboards Implementations : 
<h2>Static Data from MySQL Database</h2><br>
<img src="https://user-images.githubusercontent.com/42066122/130230222-8573d432-88d0-4336-893d-b9513f0cf6b1.png">

<img src="https://user-images.githubusercontent.com/42066122/130230259-2b66ef1e-15b4-4612-9672-2de8a666acbe.png"><br>

<h2>Live Time Series Database</h2><br>

![ezgif com-gif-maker](https://user-images.githubusercontent.com/42066122/130234100-2c02bf86-6745-448b-a4b7-4fc87ae8ef7e.gif)

<br>
Call Using AJAX : <br><br>
<img src="https://user-images.githubusercontent.com/42066122/130230659-c18b50e7-f735-4087-a7fb-b3dc5ce81233.png"><br><br>
PHP code to insert Query in MySQL database : <br><br>
<img src="https://user-images.githubusercontent.com/42066122/130230752-571d1161-f9f6-44b2-88fc-56eb1edc324e.png"><br><br>
MySQL table structure of current traffic : <br><br>
<img src="https://user-images.githubusercontent.com/42066122/130230705-37fbd8a1-9a17-46f4-991f-08320e6b6491.png"><br><br>

<h2>Windows Monitoring System</h2>
<img src="https://user-images.githubusercontent.com/42066122/130236710-e9a92d53-e196-416a-87fa-29a844066cd6.gif">
<br><br>
<img src="https://user-images.githubusercontent.com/42066122/130236901-972d4d2f-e1b1-4244-8219-8a5a003d870e.png">
<br><br>
<img src="https://user-images.githubusercontent.com/42066122/130236968-77721811-5f9c-43f1-82c8-200aac6267ba.png">
<br><br>
