<?php
/**
 * Created by PhpStorm.
 * User: chin39
 * Date: 2017/11/11
 * Time: 15:59
 * @param $company
 */
date_default_timezone_set("EST");
require_once '../clients/searchCompany.php';
require_once '../db/conn.php';

/** add new company info
 * @param $company
 * @return int|mixed "Id of add record"|
 * @throws Exception
 */
function addCompany($company)
{
    $data_conn = connection();
    $company = search_company($company['Companyname']);
    if (count($company) == 0) {
        $data_conn->insert("Client_Company", [
            "Companyname" => $company['Companyname'],
            "Status" => "1",
            "Contactname" => $company['Contactname'],
            "Description" => $company['Description'],
            "Reg_Date" => date('Y-m-d H:i:s'),
            "Email" => $company['Email'],
            "Image_URL" => $company['Image_URL'],
            "Website" => $company['Website']
        ]);
        return $data_conn->id();
    }
    throw new Exception("Company Exist");
}


/**  update company info
 * @param $company
 * @return int|mixed|"ID of Mod record"
 */
function modCompany($company)
{
    $data_conn = connection();
    $data_conn->update("Client_Company", [
        "Companyname" => $company['Companyname'],
        "Status" => "1",
        "Contactname" => $company['Contactname'],
        "Description" => $company['Description'],
        "Email" => $company['Email'],
        "Image_URL" => $company['Image_URL'],
        "Website" => $company['Website']
    ], [
        "Company_ID" => $company['Company_ID']
    ]);

    return $data_conn->id();

}

$array = array(
    "Companyname" => "2333",
    "Status" => "1",
    "Contactname" => "dfasdf",
    "Description" => "asdfasdf",
    "Reg_Date" => date('Y-m-d H:i:s'),
    "Email" => "asdf@gmail.com",
    "Image_URL" => "",
    "Website" => "www.23232323.com",
    "Company_ID" => 1

);

modCompany($array);

