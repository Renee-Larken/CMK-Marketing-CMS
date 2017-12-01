<?php
/**
 * Created by PhpStorm.
 * User: chin39
 * Date: 2017/11/15
 * Time: 11:01
 */
date_default_timezone_set("EST");

require_once $_SERVER["DOCUMENT_ROOT"] . "/db/conn.php";

/* Return all projects in database */
function all_projects()
{
    $data_conn = connection();
    $data = $data_conn->select("Client_Project", "*", [
        "Status" => "1"
    ]);
    return $data;
}

/* Search through project-related data */
function search_project($project_ID)
{
    $data_conn = connection();
    $data = $data_conn->select("Client_Project", "*", [
        "Project_ID" => $project_ID,
        "Status" => "1"
    ]);
    return $data;
}

function search_duplicate_project($project_company_ID, $project_name)
{
    $data_conn = connection();
    $data = $data_conn->select("Client_Project", "*", [
        "Company_ID" => $project_company_ID,
        "ProjectName" => $project_name,
        "Status" => "1"
    ]);
    return $data;
}

function find_project_client($project)
{
    $data_conn = connection();
    $data = $data_conn->select("Client_Company", "Companyname", [
        "Company_ID" => $project['Company_ID'],
        "Status" => "1"
    ]);
    return $data;
}

function all_project_client_info($project)
{
    $data_conn = connection();
    $data = $data_conn->select("Client_Company", "*", [
        "Company_ID" => $project['Company_ID'],
        "Status" => "1"
    ]);
    return $data;
}

function search_project_two_weeks_within()
{
    $data_conn = connection();

    $two_weeks_ago = date("Y-m-d H:i:s", strtotime("-14 day"));
//    $two_weeks_ago = date("Y-m-d H:i:s", strtotime("-1 month"));
//    $two_weeks_ago = date("Y-m-d H:i:s", strtotime("-1 week"));
//    echo $two_weeks_ago = date("Y-m-d H:i:s", strtotime("-2 day -1 week"));

    $data = $data_conn->select("Client_Project", "*", [
        "End_Date[>=]" => $two_weeks_ago
    ]);

    return $data;
}