<?php
/**
 * Created by PhpStorm.
 * User: chin39
 * Date: 2017/11/11
 * Time: 13:04
 */

include_once __DIR__ . "/../db/conn.php";

/* Return all companies in database */
function all_companies()
{
    $data_conn = connection();
    $data = $data_conn->select("Client_Company", "*", [
        "Status" => "1",
        "ORDER" => ["Companyname"]
    ]);
    return $data;
}

/* Search through company-related data */
function search_company_Like($name)
{
    $data_conn = connection();
    $data = $data_conn->select("Client_Company", "*", [
        "Companyname[~]" => "%$name%",
        "Status" => "1"
    ]);
    return $data;
}

function search_company($ID)
{
    $data_conn = connection();
    $data = $data_conn->select("Client_Company", "*", [
        "Company_ID" => $ID,
        "Status" => "1"
    ]);
    return $data;
}

function search_company_subscription($company)
{
    $data_conn = connection();
    $data = $data_conn->select("Client_Website", "*", [
        "Company_ID" => $company['Company_ID'],
        "Status" => "1",
        "ORDER" => ["Annual_Renewal", "Domain", "Site_Name"]
    ]);
    return $data;
}

function company_subscription_count($company)
{
    $data = search_company_subscription($company);
    return count($data);
}

function search_company_project($company)
{
    $data_conn = connection();
    $data = $data_conn->select("Client_Project", "*", [
        "Company_ID" => $company['Company_ID'],
        "Status" => "1",
        "ORDER" => ["End_Date", "ProjectName"]
    ]);
    return $data;
}

function company_project_count($company)
{
    $data = search_company_project($company);
    return count($data);
}
