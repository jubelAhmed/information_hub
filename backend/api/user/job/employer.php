
<?php


function getAllCompanyInfo($employer,$employerId){
    

    $result =$employer->getCompanyInfo($employerId);



    $num = $result->rowCount();

    if($num > 0){
        $companyInfoArray = array();
        $companyInfoArray['data'] = array();
       
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            
            $infoList = array(
                'company_name'=> $company_name ,
                'company_website'=>$company_website,
                'company_logos'=>$company_logos,
                'company_location'=>$company_location,
                
                
                
            );

            array_push($companyInfoArray['data'],$infoList);
            
        }

       

        return json_encode($companyInfoArray);

    }else{
        echo json_encode(array('message'=>"there have no published jobs",'status'=>"no"));
        return json_encode(array('message'=>"employer info error",'status'=>"no"));
    }

    
}


?>