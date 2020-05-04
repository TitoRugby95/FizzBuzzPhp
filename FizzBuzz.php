<?php 

    class FizzBuzz
    {
    
       public function numberIsFizz($numberFizz)
       {

            $restoFizz= $numberFizz % 3;
            
            switch ($restoFizz) 
            {
               case 0:

                    $numberFizz = 'Fizz';
                    break;
            }

            return $numberFizz;  
       }

        
        public function numberIsBuzz($numberBuzz)
        {

            $restoBuzz= $numberBuzz % 5;

            switch ($restoBuzz) 
            {
               case 0:
                
                    $numberBuzz = 'Buzz';
                    break;
            } 
            return $numberBuzz; 
        }


        public function numberFizzBuzz($numberValid)
        {

            $resultFizz = FizzBuzz::numberIsFizz($numberValid);
            $resultBuzz = FizzBuzz::numberIsBuzz($numberValid);
            

            if($resultFizz === 'Fizz' and $resultBuzz === 'Buzz')
            {

                $numberValid = 'FizzBuzz';   
            } 
            return $numberValid; 
        }
    }
?>