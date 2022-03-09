<?php

class Html{


    public function getListOfEntries($data): string
    {
        $html .= "<table>";
        $html .= "<thead><tr>";
        $html .= "<th>First Name</th>";
        $html .= "<th>Last Name</th>";
        $html .= "<th>Email</th>";
        $html .= "</tr></thead>";
        $html .= "<tbody>";

        foreach ($data as $k => $v){
            $html .= "<tr>";
            $html .= "<th>" . $v['FirstName'] . "</th>";
            $html .= "<th>" . $v['LastName'] . "</th>";
            $html .= "<th>" . $v['Email'] . "</th>";
            $html .= "</tr>";
        }
        $html .= "</tbody>";
        $html .= "</table>";

        return $html;
    }

    public function getForm($errors = []): string
    {

    }

}