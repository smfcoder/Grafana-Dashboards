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
           (Download according to the OS requirements)
        c) Download Prometheus from (https://prometheus.io/download/)   and run the file as shown in the video.<br>
        d) Run the Windows node expoerter on http://localhost:9182/metrics<br>
        e) Run Prometheus on http://localhost:9090/target<br>
        

