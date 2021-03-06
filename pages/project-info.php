<!--
	Application: CMK Marketing Customer Management System
	Module: Project Information Page

	Developers: Tusa Larkowski, Adeel Minhas, Ruowen Qin
	Brief Description: Shows the details of the client's project being examined.
-->

<!DOCTYPE html>
<html>

<!-- Header Info -->
<head>
    <meta charset="UTF-8">
    <title>CMS Project Information</title>
    <?php include '../include/header-files.php'; ?>
</head>


<!-- Page Content -->
<body>
    <?php
        include '../include/navbar.php';
        require_once $_SERVER["DOCUMENT_ROOT"] . "/clients/searchProject.php";
        require_once $_SERVER["DOCUMENT_ROOT"] . "/clients/modProject.php";

        $project = $_GET['project']; // get from param
        $project = search_project($project)[0];
        $client_ID = $project['Company_ID'];
    ?>

    <!-- Project Content -->
    <div class="container">
        <div class="row">
            <!-- Left Column -->
            <div id="left-column" class="col-md-4 my-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title" style="margin-bottom:0;"><?php echo $project['ProjectName']; ?></h4>
                    </div>

                    <img class="card-img-top" src="/img/no-image.jpg" alt="Company Image" width="100%" height="auto">

                    <div class="card-body">
                        <h4 class="card-title">Description</h4>
                        <p class="card-text"><?php echo nl2br($project['Description'], false);?></p>
                    </div>
                </div>

                <a href="/pages/client-info.php?client=<?php echo $client_ID; ?>"
                   class="btn btn-primary btn-lg btn-block green-button">Back to Client Page</a>

                <a href="/pages/edit-project-info.php?project=<?php echo $_GET['project']; ?>" type="button"
                   class="btn btn-primary btn-lg btn-block blue-button">Edit Project Information</a>

                <!-- Archiving Button + Modal Confirmation -->
                <button type="button" data-toggle="modal" data-target="#archive-project" id="archive-btn"
                        class="btn btn-primary btn-lg btn-block red-button">Archive Project Information
                </button>

                <div class="modal fade" id="archive-project" tabindex="-1" role="dialog" aria-labelledby="archive-project-label" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="archive-project-label">Archive Confirmation</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                Are you sure you want to archive this project? It won't be accessible from this application
                                once you do.
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary gray-button" data-dismiss="modal">Close
                                </button>
                                <button type="button" class="btn btn-primary green-button"
                                        onclick="archiveProject(<?php echo $project['Project_ID']; ?>, '<?php echo $client_name; ?>');">
                                    Confirm
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div id="right-column" class="col-md-8 my-4">

                <!-- Project Info -->
                <div class="sidebar">
                    <h4 class="sidebar-header">Project Info</h4>

                    <div class="sidebar-content">
                        <div id="project-info" class="container">
                            <div class="row">
                                <div class="col-3">Tracking Location</div>
                                <div class="col-9">
                                    <?php
                                    echo '<a href="' . $project['Basecamp_URL'] . '" target="_blank">' . $project['Basecamp_URL'] . '</a>';
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">Start Date</div>
                                <div class="col-9">
                                    <?php
                                    $start_time = new DateTime($project['Start_Date']);

                                    echo $start_time->format('M. d, Y');
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Due Date Status -->
                <div class="sidebar">
                    <h4 class="sidebar-header">Due Date Status</h4>

                    <div class="sidebar-content">
                        <div id="renewal-status" class="container">
                            <div class="row">
                                <div class="col-3">Finish Date</div>
                                <div class="col-3">
                                    <?php
                                    $end_time = new DateTime($project['End_Date']);

                                    echo $end_time->format('M. d, Y');
                                    ?>
                                </div>
                                <div class="col-6">
                                    <?php if ($project['Complete'] == '0'): ?>
                                        <!-- Confirmation Modal for Setting Project Complete/Archiving -->
                                        <button type="button" data-toggle="modal" data-target="#set-complete" id="archive-btn" class="btn btn-primary btn-lg btn-block red-button due-date-button">
                                            <small class="due-date-btn">Upcoming Deadline</small>
                                        </button>

                                        <div class="modal fade" id="set-complete" tabindex="-1" role="dialog" aria-labelledby="set-complete-label" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="set-complete-label">Confirm Completion</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                        Are you sure you want to set this project to complete? By doing so, the due date will automatically be updated by 1 year and will have reminders sent out accordingly. Alternatively, if this is not a recurring project, it would be better to archive it once setting it to complete.
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary gray-button" data-dismiss="modal">Close
                                                        </button>
                                                        <button type="button" class="btn btn-primary green-button"
                                                                onclick="setComplete(<?php echo $project['Project_ID'];?>, '<?php echo $project['End_Date'];?>');">
                                                            Confirm
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-8 small-padding">
                                                    <p class="btn btn-primary btn-lg btn-block gray-button due-date-button no-hover">
                                                        <small class="due-date-btn">Completed</small>
                                                    </p>
                                                </div>
                                                <div class="col-4 small-padding">
                                                    <!-- Confirmation Modal for Setting Project Incomplete -->
                                                    <button type="button" data-toggle="modal" data-target="#set-incomplete" id="archive-btn" class="btn btn-primary btn-lg btn-block red-button due-date-button">
                                                        <small class="due-date-btn">Reset</small>
                                                    </button>

                                                    <div class="modal fade" id="set-incomplete" tabindex="-1" role="dialog" aria-labelledby="set-incomplete-label" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="set-incomplete-label">Confirm Reset</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>

                                                                <div class="modal-body">
                                                                    Are you sure you want to reset the completion status of this project? The due date will be decreased by 1 year, and the appropriate reminders will be sent out accordingly.
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary gray-button" data-dismiss="modal">Close
                                                                    </button>
                                                                    <button type="button" class="btn btn-primary green-button"
                                                                            onclick="setIncomplete(<?php echo $project['Project_ID'];?>, '<?php echo $project['End_Date'];?>');">
                                                                        Confirm
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Notes on Project -->
                <div class="sidebar">
                    <h4 class="sidebar-header">Notes on Project</h4>

                    <div class="sidebar-content">
                        <p id="content-notes"><?php echo nl2br($project['Notes'], false); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Project Content -->
</body>

</html>