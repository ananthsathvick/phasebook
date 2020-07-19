## Phasebook 

Clone of Facebook - A socail media networking site implemented using relational database (MySql). Built using laravel php framework and using MySQL R-DB.

Prerequisites To Run  
- [Laravel!](https://laravel.com/)
- Composer 
- php >= 7.x
- nginx or any web server
- mysql or any other relational DB

**Too much dependencies ?**  
Containerised version using docker - *Just Bring Up the application without installing any dependencies* - [Phasebook Docker!](https://github.com/ananthsathvick/phasebook_docker)

To view the project on your local system - Run the following in your terminal

        $git clone https://github.com/ananthsathvick/phasebook.git
        
        $cd phasebook
        
Create a `.env` file and paste the contents of [Example .env!](https://github.com/laravel/laravel/blob/master/.env.example).

Enter database credentials in the .env file. And run - 
        
        $php artisan key:generate
        
        $php arisan migrate
        
        $php artisan cache:clear
        
        
After Executing These Commands Successfully You Should Be Able to See The App Running at `http://server_domain_or_IP`

If you are running on your localhost then `http://localhost`
