<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelajaran;
use App\User;
use App\Admin;
use Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    protected $url = "http://file.neostingtech.com/dataNilai.xml";
    protected $data = [];

    public function __construct(){
        $xml = file_get_contents($this->url);
        if (trim($xml) != '') {
            $xml = simplexml_load_file($this->url);
            $json = json_encode($xml);
            $this->data = json_decode($json,TRUE);
            try {
              if ($this->data['dataPemain']['nama']) {
                $this->data = $this->data;
              }
            } catch (\Exception $e) {
              $this->data = $this->data['dataPemain'];
            }
        }
    }

    public function index()
    {
        $page_title = 'Dashboard';
        $page_description = 'Halaman Utama';
        $user = Auth::user();
        $userArray = $this->data;

        return view('pages.dashboard', compact('page_title', 'page_description', 'user', 'userArray'));
    }

    public function redirect($url)
    {
      return redirect()->away((is_null(parse_url($url, PHP_URL_HOST)) ? '//' : '').$url);
    }

    public function pelajaran()
    {
        $page_title = 'Pelajaran';
        $page_description = 'Halaman Pelajaran';
        $pelajaran = Pelajaran::all();
        $user = Auth::user();

        return view('pages.pelajaran', compact('page_title', 'page_description', 'pelajaran', 'user'));
    }

    public function editPelajaran(Request $request)
    {
      $pelajaran = Pelajaran::find($request["id"]);
      if ($pelajaran) {
        if ($request->link) {
          $pelajaran->link = $request->link;
        }else {
          $pelajaran->link = "#";
        }
        $pelajaran->save();
      }
      return redirect()->route('pelajaran');
    }

    public function login()
    {
      $page_title = 'Login';
      $page_description = 'Halaman Login';
      if (Auth::guard('web')->check()) {
        return redirect('/user');
      }elseif(Auth::guard('admin')->check()){
        return redirect('/admin');
      }
      return view('pages.login', compact('page_title', 'page_description'));
    }

    public function logout(Request $request)
    {
      Auth::logout();

      $request->session()->invalidate();

      $request->session()->regenerateToken();

      return redirect('/');
    }

    public function loginAuthenticate(Request $request)
    {
      $credentials = $request->only('username', 'password');

      if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/');
        }elseif(Auth::guard('web')->attempt($credentials)){
          $request->session()->regenerate();
          return redirect('/user');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function userDashboard()
    {
      $page_title = 'Dashboard';
      $page_description = 'Halaman Utama';
      $user = Auth::user();
      $userArray = $this->data;

      return view('pages.user.dashboard', compact('page_title', 'page_description', 'user', 'userArray'));
    }

    public function pelajaranUser()
    {
      $page_title = 'Pelajaran';
      $page_description = 'Halaman Pelajaran';
      $pelajaran = Pelajaran::all();
      $user = Auth::user();

      return view('pages.user.pelajaran', compact('page_title', 'page_description', 'pelajaran', 'user'));
    }

    /**
     * Demo methods below
     */

    // Datatables
    public function datatables()
    {
        $page_title = 'Datatables';
        $page_description = 'This is datatables test page';

        return view('pages.datatables', compact('page_title', 'page_description'));
    }

    // KTDatatables
    public function ktDatatables()
    {
        $page_title = 'KTDatatables';
        $page_description = 'This is KTdatatables test page';

        return view('pages.ktdatatables', compact('page_title', 'page_description'));
    }

    // Select2
    public function select2()
    {
        $page_title = 'Select 2';
        $page_description = 'This is Select2 test page';

        return view('pages.select2', compact('page_title', 'page_description'));
    }

    // custom-icons
    public function customIcons()
    {
        $page_title = 'customIcons';
        $page_description = 'This is customIcons test page';

        return view('pages.icons.custom-icons', compact('page_title', 'page_description'));
    }

    // flaticon
    public function flaticon()
    {
        $page_title = 'flaticon';
        $page_description = 'This is flaticon test page';

        return view('pages.icons.flaticon', compact('page_title', 'page_description'));
    }

    // fontawesome
    public function fontawesome()
    {
        $page_title = 'fontawesome';
        $page_description = 'This is fontawesome test page';

        return view('pages.icons.fontawesome', compact('page_title', 'page_description'));
    }

    // lineawesome
    public function lineawesome()
    {
        $page_title = 'lineawesome';
        $page_description = 'This is lineawesome test page';

        return view('pages.icons.lineawesome', compact('page_title', 'page_description'));
    }

    // socicons
    public function socicons()
    {
        $page_title = 'socicons';
        $page_description = 'This is socicons test page';

        return view('pages.icons.socicons', compact('page_title', 'page_description'));
    }

    // svg
    public function svg()
    {
        $page_title = 'svg';
        $page_description = 'This is svg test page';

        return view('pages.icons.svg', compact('page_title', 'page_description'));
    }

    // Quicksearch Result
    public function quickSearch()
    {
        return view('layout.partials.extras._quick_search_result');
    }
}
