<?php


class PagesController {

  public function home() {
    $pages = App::get('database')->selectAll('pages');

    return view('index', compact('pages'));
  }

  public function about() {
    return view('about');
  }

  public function aboutCulture() {
    return view('about-culture');
  }
}
