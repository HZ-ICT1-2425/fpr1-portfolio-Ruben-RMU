@extends('components.main')

@section('content')
    <table id="dash">
        <tr>
            <th>Quarter</th>
            <th>Course</th>
            <th>EC Amount</th>
            <th>Exam Type</th>
            <th>Weighing Factor</th>
        </tr>
        <tr>
            <td rowspan="3">1</td>
            <td>Program- & Career Orientation</td>
            <td>2.5</td>
            <td>Interview</td>
            <td>100%</td>
        </tr>
        <tr>
            <!-- Quarter 1 -->
            <td>Computer Science Basics</td>
            <td>5</td>
            <td>Written Exam</td>
            <td>100%</td>
        </tr>
        <tr>
            <!-- Quarter 1-->
            <td>Programming Basics</td>
            <td>5</td>
            <td>Case Study Exam</td>
            <td>100%</td>
        </tr>
        <tr>
            <td rowspan="2">2</td>
            <td rowspan="2">Object Oriented Programming</td>
            <td rowspan="2">10</td>
            <td>Group Assignment</td>
            <td>50%</td>
        </tr>
        <tr>
            <!--Quarter 2-->>
            <!-- Object Oriented Programming -->
            <!-- 10 ECs-->
            <td>Case Study Exam</td>
            <td>50%</td>
        </tr>
        <tr>
            <td rowspan="4">3</td>
            <td rowspan="4">Framework Project 1</td>
            <td rowspan="4">10</td>
            <td>Case Study Exam</td>
            <td>50%</td>
        </tr>
        <tr>
            <!--Quarter 3-->
            <!--Framework 1-->
            <!--10 ECs-->
            <td>Database Exam</td>
            <td>12,5%</td>
        </tr>
        <tr>
            <!--Quarter 3-->
            <!--Framework 1-->
            <!--10 ECs-->
            <td>Group Presentation</td>
            <td>25%</td>
        </tr>
        <tr>
            <!--Quarter 3-->
            <!--Framework 1-->
            <!--10 ECs-->
            <td>Group Portfolio</td>
            <td>12,5%</td>
        </tr>
        <tr>
            <td rowspan="3">4</td>
            <td rowspan="3">Framework Project 2</td>
            <td rowspan="3">10</td>
            <td>Final Delivery portfolio</td>
            <td>25%</td>
        </tr>
        <tr>
            <!--Quarter 4-->
            <!--Framework 2-->
            <!--10 ECs-->
            <td>Report</td>
            <td>25%</td>
        </tr>
        <tr>
            <!--Quarter 4-->
            <!--Framework 2-->
            <!--10 ECs-->
            <td>IT Development portfolio</td>
            <td>50%</td>
        </tr>
        <tr>
            <td>3 and 4</td>
            <td>Business IT Consultancy basics</td>
            <td>2.5</td>
            <td>Video</td>
            <td>100%</td>
        </tr>
        <tr>
            <td rowspan="2">All 4</td>
            <td>Personal Profesionnal Development</td>
            <td>12.5</td>
            <td>Interview</td>
            <td>100%</td>
        </tr>
        <tr>
            <!-- all 4-->
            <td>IT Personality</td>
            <td>5</td>
            <td>4 Portfolios</td>
            <td>25% per portfolio</td>
        </tr>
        <tr id="tot">
            <td colspan="5">Maximum obtainable amount of ECs is 60</td>
        </tr>
        <tr>
            <tfoot id="nbsa">
            <td colspan="5">If you get below 45 ECs, you're below the required amount for the NBSA and you get kicked out of the study.</td>
            </tfoot>
        </tr>
    </table>
    <br>
    <progress id="progMeter" max="60" value="7.5"></progress>
@endsection
