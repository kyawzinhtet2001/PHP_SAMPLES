<?php

    function print_values($arr){
        global $count;
        global $values;

        if(!is_array($arr)){
            die("ERROR: Input is not an array");
        }
        foreach($arr as $key=>$value){
            if(is_array($value)){
                print_values($value);
            }
            else{
                $values[]=$value;
                $count++;
            }
        }

        return array('total'=>$count,'values'=>$values);
    }

    // $json='{
    //     "problems": [{
    //         "Diabetes":[{
    //             "medications":[{
    //                 "medicationsClasses":[{
    //                     "className":[{
    //                         "associatedDrug":[{
    //                             "name":"asprin",
    //                             "dose":"",
    //                             "strength":"500 mg"
    //                         }],
    //                         "associatedDrug#2":[{
    //                             "name":"somethingElse",
    //                             "dose":"",
    //                             "strength":"500 mg"
    //                         }]
    //                     }],
    //                     "className2":[{
    //                         "associatedDrug":[{
    //                             "name":"asprin",
    //                             "dose":"",
    //                             "strength":"500 mg"
    //                         }],
    //                         "associatedDrug#2":[{
    //                             "name":"somethingElse",
    //                             "dose":"",
    //                             "strength":"500 mg"
    //                         }]
    //                     }]
    //                 }]
    //             }],
    //             "labs":[{
    //                 "missing_field": "missing_value"
    //             }]
    //         }],
    //         "Asthma":[{}]
    //     }]}';  
        $json2='{
            "book":{
                "name":"Harry Potter",
                "author":"J. K. Rowling",
                "year":2000,
                "characters":["Harry Potter","Hermione Granger","Ron Weasley"],
                "price":{
                    "paperback":"$10.40",
                    "hardcover":"$20.32",
                    "kindle":"4.11"
                
                }
            }
        }';
        $json1='{
            "base":"This is good",
            "booth":2
        
        }';
        $arr=json_decode($json2,true);
        // var_dump($arr);
        print_r(print_values($arr));
?>