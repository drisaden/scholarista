<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }
    public function login()
    {
        if ($this->session->id) {
            return redirect()->to('/dashboard');
        }else{
            echo view('login');
        }
        
    }
    public function pg()
    {
        echo view('pg');
    }

    function dashboard() {
        $Users = new \App\Models\Users();
        $Students = new \App\Models\Students();

        if ($this->session->id) {
            $clr = $this->session->clearance;
            if ($clr == 99) {
                

                $data = [
                    'students'=>$Students->findAll(),
                    'parents'=>$Users->findAll()
                ];
                echo view('db/pg', $data);
            } elseif ($clr == 22) {
                echo view('db/teacherDB');
            } else {
                echo view('db/parent', ['name' => $this->session->full_name]);
            }
        } else {
            return redirect()->to('/login');
        }
       
    }

    function logout() {
        $this->session->destroy();
        return redirect()->to('/login');
    }

    public function postLogin()
    {
        $incoming = $this->request->getPOST();
        // echo $incoming['password'];
        $users = new \App\Models\Users();
        $incoming['password'] = md5($incoming['password']);
        $res = $users->where($incoming)->find();
        if ($res) {
            $this->session->set($res[0]);
            // dd();
            return redirect()->to('/dashboard');
        } else {
            echo view('login');
            // echo view('msg', ['title'=> 'Login unsuccessful', 'color'=> 'red', 'body'=>'Whoops. There\'s an error, Please login again']);
        }
    }
    public  function signup()
    {
        echo view('signup');
    }
    public  function postSignup()
    {
        $incoming = $this->request->getPOST();
        $users = new \App\Models\Users();
        // dd($incoming);
        $incoming['password'] = md5($incoming['password']);
        $incoming['clearance'] = 1;

        $mail_res = $users->where('email', $incoming['email'])->find();
        $username_res = $users->where('username', $incoming['username'])->find();
        if ($mail_res || $username_res) {
            if ($mail_res && $username_res) {
                echo view('msg', ['title'=> 'Error', 'color'=> 'red', 'body'=> 'Username and Email already exists']);
            } else if ($username_res) {
                echo view('msg', ['title'=> 'Error', 'color'=> 'red', 'body'=> 'Username already exists']);
            } else {
                echo view('msg', ['title'=> 'Error', 'color'=> 'red', 'body'=> 'Email already exists']);
            }
        } else {
            $res = $users->insert($incoming);
            if ($res) {
                // echo view('msg', ['title'=> 'Success', 'color'=> 'green', 'body'=> 'Registration Successful']);
                  return redirect()->to('/db/parent');

            } else {
                echo view('msg', ['title'=> 'Error', 'color'=> 'red', 'body'=> 'Registration Unsuccessful. Try again later']);;
            }
        }

        // dd($incoming);
        // dd($users->find());
    }
    public  function postAddStudent()
    {
        $incoming = $this->request->getPOST();
        // $incoming['dob'] = date("Y-m-d");
        // $formatDate = mktime(0, 0, 0, $incoming['dob']);
        // dd($formatDate);
        // dd($incoming['dob']);

        // $dateParts = explode('-', $incoming['dob']);

        // // Reverse the array
        // $dateParts = array_reverse($dateParts);

        // // Access each element of the array
        // $year = $dateParts[2];
        // $month = $dateParts[1];
        // $day = $dateParts[0];
        // $incoming['dob'] = $year . "-" . $month . "-" . $day;
        // dd($incoming['dob']);

        $users = new \App\Models\Users();
        $Students = new \App\Models\Students();
        $incoming['clearance'] = 1;

        $mail_res = $users->where('email', $incoming['email'])->find();
        $phone_res = $users->where('phonenumber', $incoming['phone'])->find();
        $addNum_res = $Students->where('adm_number', $incoming['adm_number'])->find();
        if ($mail_res || $phone_res || $addNum_res) {
            if ($mail_res && $phone_res && $addNum_res) {
                echo view('msg', ['title'=> 'Error', 'color'=> 'red', 'body'=>'Admission number, Email and Phone Number already exists']);
            } else if ($phone_res) {
                echo 'Phone number already exists';
            } else if ($addNum_res) {
                echo view('msg', ['title'=> 'Error', 'color'=> 'red', 'body'=>'Admision Number already exists']);
            } else {
                view('msg', ['title'=> 'Error', 'color'=> 'red', 'body'=>'Email already exists']);;
            }
        } else {
            $res = $Students->insert($incoming);
            if ($res) {
                echo view('msg', ['title'=> 'Success', 'color'=> 'green', 'body'=>'Student successfully added']);
            } else {
                echo view('msg', ['title'=> 'Error', 'color'=> 'red', 'body'=>'Whoops. There\'s an error, Please try again later']);
            }
        }

        // dd($incoming);
        // dd($users->find());
    }

    public  function attendanceApi($id, $event = 'daily')
    {
        // echo "Today's date is :";
        // $today = date("d/m/Y");
        // echo $today;
        // $timestamp = time();
        // echo($timestamp);
        // echo "\n";
        // echo(date("F d, Y h:i:s A", $timestamp));
        $students = new \App\Models\Students();
        $attendance = new \App\Models\Attendance();
        $cmp = $students->where("adm_number", $id)->find();
        $today = date("dmY");
        $timestamp = date("Y-m-d h:i:s", time());
        if ($cmp != []) {
            $stud = $cmp[0];
            $std = $stud['adm_number'];
            $data = [
                "events" => $event . $today,
                "date_and_time" => $timestamp,
                "students" => $std
            ];
            $cmp_data = ['events' => $event . $today, 'students' => $std];
            if ($attendance->where($cmp_data)->find() != []) {
                echo "Attendance already taken";
            } else {
                $attendance->insert($data);
                echo 'Successful';
            }
        } else {
            echo 'ADM Not ';
        }
    }

    public  function attendance()
    {
        $Attendance = new \App\Models\Attendance();
        $Students = new \App\Models\Students();
        $AttendanceJoined = $Attendance->join('students', 'attendance.students = students.adm_number');
        // dd($Attendance->findAll());
        $data = [
            // 'pStudents1'=>$AttendanceJoined->where(['events'=>'daily'.date('dmY'), 'class'=>'JSS3'])->countAllResults(),
            // 'students' => $Attendance->countAllResults(),
            // 'students' => $Students->countAllResults(),
            'tStudents' => $Students->countAllResults(),
            'pStudents'=>$Attendance->where('events','daily'.date('dmY'))->countAllResults(),
            // 'pStudents1'=>$Attendance->where(['events'=>'daily'.date('dmY'), 'class'=>'JSS1'])->countAllResults(),
        ];
        echo view('attendance', $data);
    }
    public  function parent()
    {
        echo view('parent');
    }

    public  function payment($adm)
    {
        $Students = new \App\Models\Students();
        $studentData = $Students->where('adm_number', $adm)->find()[0];
        $client = \Config\Services::curlrequest();
        $amount = 20000;

        $response = $client->request('POST', 'https://api.flutterwave.com/v3/payments', [
            'headers' => [
                'Authorization'=> "Bearer ".$_ENV['flwsc']
            ],
            'json'=>[
                'tx_ref'=> "scholaristapay".'4356576435',
                'amount'=> $amount,
                'currency'=> "NGN",
                'redirect_url'=>"https://google.com",
                'meta'=> [
                    'student_id'=> $adm,
                    'student_name'=> $studentData['f_name']." ".$studentData['l_name']
                ],
                'customer'=> [
                    'email'=> $studentData['phone']."@gmail.com",
                ],
            ]
        ]);
        $body = json_decode($response->getBody());
        $link = $body->data->link;
        // dd();
        return redirect()->to($link);

        // dd($_ENV['flwsc']);
        // echo view('parent');
    }

    private function Genmsg($msg, $title='') {
        echo view('msg', ['title'=> $title, 'color'=> 'blue', 'body'=>$msg]);
    }

    function assignstudent() {
        $Users = new \App\Models\Users();
        $Students = new \App\Models\Students();

        if ($this->session->id) {
            $clr = $this->session->clearance;
            if ($clr == 99) {

                $incoming=$this->request->getPost();
                $parent = explode('-', $incoming['parent'])[0];
                $student = explode('-', $incoming['student'])[0];

                $parentData = $Users->where('id', $parent)->find()[0];
                $otherData = json_decode($parentData['others']);
                if($otherData == null){
                    $ch = ['children'=>[$student]];
                }else{
                    //Incase there's an existing child in the array
                    $ch = ['children'=>[$student]];
                }
                $res = $Users->where('id',$parent)->set('others', json_encode($ch))->update();
                if($res){
                    $this->Genmsg('You have just assigned a student to a parent');
                }
            }else{
                $this->Genmsg('You are not allowed to carry out this action!!');
            }
        } else {
            return redirect()->to('/login');
        }
    }
}
