import pyodbc as odbccon

conn = odbccon.connect('Driver={SQL Server};'
                       'Server=LAPTOP-9IMGB9ON\SKANGKY_EXPRESS;'
                       'Database=coloryo(u);'
                       'Trusted_Connection=True;')


cursor = conn.cursor()
cursor.execute('SELECT * FROM user_level')

for row in cursor:
    print('row = %r' %(row,))
    
msg = "Hello World"

print(msg)