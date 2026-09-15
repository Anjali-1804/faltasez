<?php
include("application-top.php");

$docRows = array(
    array(
        "title" => "Reducing compliance burden regarding SOFTEX Forms - reg.",
        "date_of_issue" => "14-07-2023",
        "file" => "Instruction no.113.pdf",
    ),
    array(
        "title" => "Execution of Bond-cum-Legal Undertaking by SEZ Developers / Units under SEZ Rules, 2006 - Clarification - reg.",
        "date_of_issue" => "23-02-2023",
        "file" => "Instruction No. 123",
    ),
    array(
        "title" => "Guidelines regarding reorganization, including change of name, change of shareholding pattern, business transfer arrangements, court-approved mergers and demergers, change of constitution and change of Directors of SEZ Developers / Co-Developers and SEZ Units",
        "date_of_issue" => "05-01-2025",
        "file" => "Instruction No. 122",
    ),
    array(
        "title" => "Clarification regarding the requirement of filing SOFTEX Forms for invoices raised by one Special Economic Zone (SEZ) unit to another SEZ unit and to a unit located in the Domestic Tariff Area (DTA unit) - reg.",
        "date_of_issue" => "07-10-2025",
        "file" => "Instruction No. 120.pdf",
    ),
    array(
        "title" => "Conversion of demarcated Non-Processing Built-up Area (NPA) into Processing Built-up Area (PA) - reg.",
        "date_of_issue" => "17-10-2025",
        "file" => "DoC Instruction No.121 dated 17.10.2025",
    ),
    array(
        "title" => "Standardization of the sealing procedure for uniform acceptance of SEZ export containers at all gateway ports - reg.",
        "date_of_issue" => "22-07-2026",
        "file" => "Instruction no. 124  dt 22.07.2026",
    ),
);

$docTitle = "Instructions";
$docHeading = "Department of Commerce Instructions";
$docHeadingHtml = "DoC <span>Instructions</span>";
$docMeta = "Instructions issued by the Department of Commerce for Special Economic Zones.";
$docBreadcrumb = array(
    array("label" => "Home", "href" => "index.php"),
    array("label" => "Department of Commerce", "href" => "instructions.php"),
    array("label" => "Instructions", "href" => "instructions.php"),
);
$docIntro = "Instructions issued by the Department of Commerce, Ministry of Commerce &amp; Industry, for Special Economic Zones.";
$docCaption = "List of Department of Commerce instructions";
$docColTitle = "Instruction";
$docTitleCol = "title";
$docFileCol = "file";
$docFolder = "repo/instructions";
$docEmpty = "No instruction is available at present.";

include("includes/doc-list-page.php");
