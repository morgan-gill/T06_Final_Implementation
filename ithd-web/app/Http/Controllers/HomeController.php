<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \PDF;
use App\Project;
use App\User;
use App\Message;
use App\Inquiry;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\DOMDocument;
use Dompdf\Dompdf;
use File;
use Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('logged_user.dashboard');
    }

    public function createPropStep1()
    {
        return view('logged_user.create_proposal_1');
    }

    public function createPropStep2()
    {
        return view('logged_user.create_proposal_2');
    }

    public function createPropStep3()
    {
        return view('logged_user.create_proposal_3');
    }
    public function createPropStep4()
    {
        return view('logged_user.create_proposal_4');
    }
    public function createPropStep5()
    {
        return view('logged_user.create_proposal_5');
    }
    public function createPropStep6()
    {
        return view('logged_user.create_proposal_6');
    }

    public function storeStep1(Request $request){
        Session::put([
            'projectOwner' => $request->projectOwner,
            'projectName' => $request->projectName,
            'phone' => $request->phone,
            'email' => $request->email,
            'projectAddress' => $request->projectAddress,
            'builder' => $request->builder,
            'archStyle' => $request->archStyle,
            'genContractor' => $request->genContractor,
            'designStages' => $request->designStages,
            'revisions' => $request->revisions,
            'specialConditions' => $request->specialConditions,
            'generalInfo' => $request->generalInfo
            ]);
        return redirect('/step_2');
      }

    public function storeStep2(Request $request){
        Session::put([
            'GFA' => $request->GFA,
            'buildingArea' => $request->buildingArea,
            'numOfFloors' => $request->numOfFloors,
            //floors heights!!!!
            'staircase' => $request->staircase,
            'permissiveDocs' => $request->permissiveDocs,
            'parking' => $request->parking,
            'garageMaterials' => $request->garageMaterials,
            'security' => $request->security,
            'dimensionDetails' => $request->dimensionDetails
            ]);
        return redirect('/step_3');
    }

    public function storeStep3(Request $request){
        /*Session::put([
            'projectDimensions' => $request->dimensionDetails
            ]);*/
        return redirect('/step_4');
    }
    public function storeStep4(Request $request){
        Session::put([
            'frontFacade' => $request->frontFacade,
            'rearFacade' => $request->rearFacade,
            'sidesFacade' => $request->sidesFacade,
            'windowsFrame' => $request->windowsFrame,
            'windowsColour' => $request->windowsColour,
            'windowsGlazing' => $request->windowsGlazing,
            'doorsMaterial' => $request->doorsMaterial,
            'doorsColour' => $request->doorsColour,
            'wallsMaterial' => $request->wallsMaterial,
            'deckMaterial' => $request->deckMaterial,
            ]);
        return redirect('/step_5');
    }
    public function storeStep5(Request $request){
        Session::put([
            'footing' => $request->footing,
            // wall materials????
            'exteriorWalls' => $request->exteriorWalls,
            'supportingStructures' => $request->supportingStructures,
            //wall materials??
            //floor materials??
            //stairs materials??
            //roof materials??
            'windowsGlazing' => $request->windowsGlazing,
            'doorsMaterial' => $request->doorsMaterial,
            'doorsColour' => $request->doorsColour,
            'wallsMaterial' => $request->wallsMaterial,
            'deckMaterial' => $request->deckMaterial,
            ]);
        return redirect('/step_6');
    }
    public function storeStep6(Request $request){
        Session::put([
            'utilityRoomLocation' => $request->utilityRoomLocation,
            // wall materials????
            'coldWaterSystems' => $request->coldWaterSystems,
            'hotWaterSupply' => $request->hotWaterSupply,
            //wall materials??
            //floor materials??
            //stairs materials??
            //roof materials??
            'furnance' => $request->furnance,
            'sewage' => $request->sewage,
            'hvac' => $request->hvac,
            'powerSupply' => $request->powerSupply,
            'fireAlarm' => $request->fireAlarm,
            'securitySupply' => $request->securitySupply,
            'internetOpticFiber' => $request->internetOpticFiber,
            'videoSurveillance' => $request->videoSurveillance,
            ]);
        return redirect('/create_proposal_review');
    }

    public function storeProjectFile(Request $request){
        //$projectPdf = PDF::loadView('logged_user.pdf')->output();
        $dompdf = new Dompdf();
        $html = view('logged_user.pdf')->render();
        $dompdf->loadHtml($html);
        $dompdf->render();
        $pdf = PDF::loadView('logged_user.pdf');
        $output = $pdf->download('proposal.pdf');


        $project = Project::create([
            'userId' => Auth::id()
        ]);
        $last_inserted_id = $project->projectId;
        $project_save = Project::find($last_inserted_id);
        $project_save->project_filename = 'project_'.$last_inserted_id.'.pdf';
        $project_save->save();
        file_put_contents('project_'.$last_inserted_id.'.pdf', $output);
        //$pdf->save(storage_path().'_filename.pdf');
        //return redirect('/create_proposal_finished');
        return view('logged_user.create_proposal_finished');
    }

    public function storeProposalReview(Request $request){
        /*Session::put([
        'projectDimensions' => $request->dimensionDetails
        ]); */
        //return redirect('/proposal_review');
    }

    public function downloadPDF(){
        $pdf = PDF::loadView('logged_user.pdf');
        return $pdf->download('proposal.pdf');
    }

    public function viewPDF(Request $request){
        $pdf = PDF::loadView("../../../storage/app/public/projectsPDFs/project_1.pdf");
        return $pdf->stream("../../../storage/app/public/projectsPDFs/project_1.pdf", array("Attachment" => false));

    }

    public function getUser($id){
        $user = User::find($id);
        return view('admin/user', ['user' => $user]);
    }

    
    public function getUsers(){
        return view('admin.users');
    }
    public function getInquiries(){
        return view('admin.inquiries');
    }
    public function deleteUser($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.users')->with('success', 'User have been deleted');
    }

    public function inbox(){
        return view('logged_user.chat');
    }

    public function fetchMessages()
    {
        return Message::with('user')->get();
    }


    public function sendMessage(Request $request)
    {
    $user = Auth::user();

    $message = $user->messages()->create([
        'message' => $request->input('message')
    ]);

    broadcast(new MessageSent($user, $message))->toOthers();

    return ['status' => 'Message Sent!'];
    }

    public function submitInquiry(Request $request){
        $inquiry = Inquiry::create([
            'userId' => Auth::id(),
            'inquiry' => $request->inquiry
            ]);
            $inquiry->save();
        return redirect()->route('home')->with('success', 'Message has been sent');
    }

    public function updateInquiryStatus(Request $request, Inquiry $inquiry)
    {
        $inquiry->solved = 1;
        $inquiry->save();
        return redirect('/inquiries');
    }
}
