<?php
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
               DB::table('users')->insert([
            'name' => 'Christian Montemayor',
            'email' => 'ch.@gmail.com',
            'password' => bcrypt('secret'),
            ]);
          
   
         DB::table('citizenships')->insert([
            'name' => 'Filipino',
             
             ]);
             
             DB::table('citizenships')->insert([
            'name' => 'American',
             
             ]);
                 
             DB::table('citizenships')->insert([
            'name' => 'Japanese',
             
             ]);
                 
             DB::table('citizenships')->insert([
            'name' => 'Brazilian',
             
             ]);
                 
             DB::table('citizenships')->insert([
            'name' => 'African',
             
             ]);
             
             
             
             DB::table('citizenships')->insert([
            'name' => 'Dutch',
             
             ]);    
            
             DB::table('citizenships')->insert([
            'name' => 'Malaysian',
             
             ]);
                 
             DB::table('citizenships')->insert([
            'name' => 'British',
                 
             ]);    
                 
             DB::table('citizenships')->insert([
            'name' => 'Colombian',
             
             ]);    
             
             DB::table('citizenships')->insert([
            'name' => 'Dominican',
             
             ]);   
      
        DB::table('lawsuits')->insert([
            'name' => 'Bribery'
            
      
             ]);
             DB::table('lawsuits')->insert([
            'name' => 'Child Abuse'
           
      
             ]);
             
             DB::table('lawsuits')->insert([
            'name' => 'Child Pornography'
          
      
             ]);
             
             DB::table('lawsuits')->insert([
            'name' => 'Cyber Bullying'
         
      
             ]);
             
             DB::table('lawsuits')->insert([
            'name' => 'Forgery'
            
      
             ]);
             
             DB::table('lawsuits')->insert([
            'name' => 'Fraud'
            
      
             ]);
             
             DB::table('lawsuits')->insert([
            'name' => 'Harassment'
           
      
             ]);
             
             DB::table('lawsuits')->insert([
            'name' => 'Homicide'
           
      
             ]);
             
             DB::table('lawsuits')->insert([
            'name' => 'Kidnapping'
           
      
             ]);
             
             DB::table('lawsuits')->insert([
            'name' => 'Prostitution'
         
      
             ]);
             
             DB::table('lawsuits')->insert([
            'name' => 'Sexual Assault'
            
      
             ]);
             
        
   
            DB::table('casetypes')->insert([
            'name' => 'Criminal',
             
             ]);
             
             DB::table('casetypes')->insert([
            'name' => 'Civil',
             
             ]);
             
             DB::table('casetypes')->insert([
            'name' => 'Labor',
             
             ]);
                 
             DB::table('casetypes')->insert([
            'name' => 'Administrative',
             
             ]);
                  
             DB::table('casetypes')->insert([
            'name' => 'Appeal',
             
             ]);
  
         DB::table('categories')->insert([
            'name' => 'VAWC',
             
           ]);
             
         DB::table('categories')->insert([
            'name' => 'CICL',
             
           ]);
             
         DB::table('categories')->insert([
            'name' => 'Human Security Act',
             
           ]);
             
         DB::table('categories')->insert([
            'name' => 'Anti-Torture Law',
             
           ]);  
             
         DB::table('categories')->insert([
            'name' => 'Agrarian Case',
             
           ]);    
        
         DB::table('education')->insert([
            'name' => 'Elementary'
         
      
             ]);
             
             DB::table('education')->insert([
            'name' => 'High School'
          
      
             ]);
             
             DB::table('education')->insert([
            'name' => 'College'
            
              
             ]);
             
             DB::table('education')->insert([
            'name' => 'Graduate'
             ]);
             
            
        
   
         DB::table('involvements')->insert([
            'name' => 'Plaintiff',
             
             ]);
             
          DB::table('involvements')->insert([
            'name' => 'Petitioner',
             
             ]); 
              
           DB::table('involvements')->insert([
            'name' => 'Defendant',
             
             ]);
               
            DB::table('involvements')->insert([
            'name' => 'Respondent',
             
             ]);  
                
            DB::table('involvements')->insert([
            'name' => 'Oppositor',
             
             ]);  
                
             DB::table('involvements')->insert([
            'name' => 'Accused',
             
             ]);     
      
         DB::table('languages')->insert([
            'name' => 'Tagalog'
           
            
            ]);
            
             DB::table('languages')->insert([
            'name' => 'English'
         
            
            ]);
            
            DB::table('languages')->insert([
            'name' => 'Mandarin'
          
            
            ]);
            
            DB::table('languages')->insert([
            'name' => 'Russian'
          
            
            ]);
            
            DB::table('languages')->insert([
            'name' => 'Spanish'
         
            
            ]);
   
         DB::table('positions')->insert([
            'name' => 'Lawyer',
             
             ]);
             
          DB::table('positions')->insert([
            'name' => 'Interviewer',
             
             ]);   
            
       DB::table('services')->insert([
            'name' => 'Legal Advice',
             
            ]);
             
            DB::table('services')->insert([
            'name' => 'Legal Assistance',
             
            ]);
               
            DB::table('services')->insert([
            'name' => 'Legal Documentation',
             
            ]);
                
            DB::table('services')->insert([
            'name' => 'Administration of oath',
             
            ]); 
            DB::table('services')->insert([
            'name' => 'Mediation',
             
            ]); 
                
            DB::table('services')->insert([
            'name' => 'Representation of quasi-judicial bodies',
             
            ]);     
    
         DB::table('statuses')->insert([
            'name' => 'Granted',
             
             ]);
             
             DB::table('statuses')->insert([
            'name' => 'Dismissed',
             
             ]);
                 
             DB::table('statuses')->insert([
            'name' => 'Denied',
             
             ]);
                 
             DB::table('statuses')->insert([
            'name' => 'Terminated',
             
             ]); 
                 
             DB::table('statuses')->insert([
            'name' => 'Closed',
             
             ]);
                 
             DB::table('statuses')->insert([
            'name' => 'Disposed',
             
             ]);      
             
             
   
         DB::table('religions')->insert([
            'name' => 'Roman Catholic'
             
            
            ]);
            
            DB::table('religions')->insert([
            'name' => 'Seventh-day adventist'
            
            
            ]);
            
            DB::table('religions')->insert([
            'name' => 'Buddhism'
             
            
            ]);
                
            DB::table('religions')->insert([
            'name' => 'islam'
             
            
            ]);
                
            DB::table('religions')->insert([
            'name' => 'Hinduism'
         
            
            ]);    


        DB::table('Court')->insert([
            'name' => 'Supreme Court',
             
             ]);
             
             DB::table('Court')->insert([
            'name' => 'Municipal Trial Court',
             
             ]);
             
             DB::table('Court')->insert([
            'name' => 'Court of Appeals',
             
             ]);
                 
             DB::table('Court')->insert([
            'name' => 'Metropolitan Trial Court',
             
             ]);
                  
             DB::table('Court')->insert([
            'name' => 'Provincial Regional Trial Court',
             
             ]);

             DB::table('Court')->insert([
            'name' => 'Metro Manila Regional Trial Court',
             
             ]);



        DB::table('courttype')->insert([
            'name' => 'Drugs court',
             
             ]);
             
             DB::table('courttype')->insert([
            'name' => 'Family court',
             
             ]);
             
             DB::table('courttype')->insert([
            'name' => 'Commercial court',
             
             ]);
                 
             DB::table('courttype')->insert([
            'name' => 'Regular court',
             
             ]);


        DB::table('Decision')->insert([
            'name' => 'Conviction',
             
             ]);
             
             DB::table('Decision')->insert([
            'name' => 'Acquittal',
             
             ]);
             
             DB::table('Decision')->insert([
            'name' => 'Dismissed',
             
             ]);


         DB::table('requeststat')->insert([
            'name' => 'On Process',
             
             ]);
             
             DB::table('requeststat')->insert([
            'name' => 'Pending',
             
             ]);
             
             DB::table('requeststat')->insert([
            'name' => 'Finished',

             DB::table('requeststat')->insert([
            'name' => 'Dismissed',
             
             ]);


        DB::table('scheduletype')->insert([
            'name' => 'Jail Visitation',
             
             ]);
             
             DB::table('scheduletype')->insert([
            'name' => 'Hearing',
             
             ]);


         DB::table('Branch')->insert([
            'name' => 'QC BRANCH 90',
             
             ]);
             
             DB::table('Branch')->insert([
            'name' => 'QC BRANCH 92',
             
             ]);

             DB::table('Branch')->insert([
            'name' => 'QC BRANCH 94',
             
             ]);

             DB::table('Branch')->insert([
            'name' => 'QC BRANCH 96',
             
             ]);

             DB::table('Branch')->insert([
            'name' => 'QC BRANCH 98',
             
             ]);



         DB::table('Reason')->insert([
            'name' => 'Conflict of interest',
             
             ]);
             
             DB::table('Branch')->insert([
            'name' => 'Acceptance of case on provisional basis only',
             
             ]);

             DB::table('Branch')->insert([
            'name' => 'Public attorneys do not act as Public or State Prosecutors in criminal cases
             before court proceedings',
             
             ]);

             DB::table('Branch')->insert([
            'name' => 'You have engaged the services of another counsel and there is no withdrawal of
              appearance',

             
             ]);
                 
  



        }
    
}
