class easy_file_logger():
    from datetime import datetime
    from os import remove
    from os import stat

    def __init__(self,file_name):
        self.file_name = file_name
        self.write_time = False

    def write(self,message):
        #https://docs.python.org/3/library/datetime.html#strftime-and-strptime-format-codes
        if (self.write_time == True):
            now = self.datetime.now().strftime('[%H:%M:%S.%f %a %d/%m/%Y] ')
        else:
            now = ""
        #https://www.tutorialspoint.com/python/python_files_io.htm
        with open(self.file_name,'a') as myFile:
            for line in str(message).splitlines():
                myFile.write(now + line + "\n")

    def delete_file(self):
        try:
            self.remove(self.file_name)
        except OSError:
            pass

    def read(self):
        try:
            f = open(self.file_name, "r")
            content = f.read()
            f.close()
        except OSError:
            content = "[easy_file_logger] Unable to load file."
        return content

    def size(self):
        try:
            lenght = self.stat(self.file_name).st_size
        except OSError:
            lenght = -1
        return lenght
        
if __name__ == '__main__':

    # log = easy_file_logger("my_file.txt")
    # log.delete_file()
    # log.write("Text line")
    # log.read()

    testFile = "myNewFile.txt"

    log = easy_file_logger(testFile)
    log.delete_file()
    log.write("This is a log file.")
    log.write("")
    log.write("After a blank line")
    log.write("Multiline\nText\nMore lines")
    log.write(23)
    x=24
    log.write(x)
    log.write(type(x))
    
    print("Log file has been wrote.")
    print("Opening and reading test file:")

    print(log.read())

    print(log.size())
    log.delete_file()
    print(log.size()) #-1 se il file non esiste
    log.delete_file()

