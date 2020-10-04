# config.py
DATABASE_CONFIG = {
    'host': 'localhost',
    'dbname': 'company',
    'user': 'user',
    'password': 'password',
    'port': 3306
}


# main.py
import config

def load_config():
    conn = connect(host=config.DATABASE_CONFIG['host'],
                   user=config.DATABASE_CONFIG['user'],
                   password=config.DATABASE_CONFIG['password'],
                   db=config.DATABASE_CONFIG['dbname'])
    return conn

load_config()
