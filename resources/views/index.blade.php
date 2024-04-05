@extends('layout')

@section('title',"Products")

@section('content')
<br>
      <br>
      <div class="content mt-5">
        <h1
          style="text-align:center; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-weight: bolder; font-size: 100px;">
          Simple Laravel <span class="text-danger"> Webshop</span></h1>
      </div>
      <div class="product-container">
        <div class="grids">

          <!-- Copy this -->
          <div class="grid">
            <a class="card" data-shoppy-product="">
              <div class="wrapper">
                <div class="image-wrapper">
                  <img src="{{ asset('images/test-product.jpg') }}">
                </div>
              </div>
              <div class="content">
                <span class="title">Product#1</span>
                <span class="description"></span>
                <div class="card-footer">
                  <button class="button style3 fit" data-sellix-product="61c81515a2681" type="submit"
                    alt="Buy Now">Buy</button>
                  <span class="price">1.50 <span>EUR</span></span>
                </div>
              </div>
            </a>
          </div>
          <!-- Copy this -->


          <div class="grid">
            <a class="card" data-shoppy-product="">
              <div class="wrapper">
                <div class="image-wrapper">
                  <img src="{{ asset('images/test-product.jpg') }}">
                </div>
              </div>
              <div class="content">
                <span class="title">Product#2</span>
                <span class="description"></span>
                <div class="card-footer">
                  <button class="button style3 fit" data-sellix-product="621803c5839c5" type="submit"
                    alt="Buy Now">Buy</button>
                  <span class="price">5.00 <span>EUR</span></span>
                </div>
              </div>
            </a>
          </div>


          <div class="grid">
            <a class="card" data-shoppy-product="">
              <div class="wrapper">
                <div class="image-wrapper">
                  <img src="{{ asset('images/test-product.jpg') }}">
                </div>
              </div>
              <div class="content">
                <span class="title">Product#3</span>
                <span class="description"></span>
                <div class="card-footer">
                  <button class="button style3 fit" data-sellix-product="6218045d1691d" type="submit" alt="Buy Now">Buy</button>
                  <span class="price">1.50 <span>EUR</span></span>
                </div>
              </div>
            </a>
          </div>


          <div class="grid">
            <a class="card" data-shoppy-product="">
              <div class="wrapper">
                <div class="image-wrapper">
                  <img src="{{ asset('images/test-product.jpg') }}">
                </div>
              </div>
              <div class="content">
                <span class="title">Tradingview</span>
                <span class="description"></span>
                <div class="card-footer">
                  <button class="button style3 fit" data-sellix-product="6221d6228e3c6" type="submit" alt="Buy Now">Buy</button>
                  <span class="price">1.50 <span>EUR</span></span>
                </div>
              </div>
            </a>
          </div>

          <div class="grid">
            <a class="card" data-shoppy-product="">
              <div class="wrapper">
                <div class="image-wrapper">
                  <img src="{{ asset('images/test-product.jpg') }}">
                </div>
              </div>
              <div class="content">
                <span class="title">Product#4</span>
                <span class="description"></span>
                <div class="card-footer">
                  <button class="button style3 fit" data-sellix-product="6218045e3d30a" type="submit" alt="Buy Now">Buy</button>
                  <span class="price">1.50 <span>EUR</span></span>
                </div>
              </div>
            </a>
          </div>

          <div class="grid">
            <a class="card" data-shoppy-product="">
              <div class="wrapper">
                <div class="image-wrapper">
                  <img src="{{ asset('images/test-product.jpg') }}">
                </div>
              </div>
              <div class="content">
                <span class="title">Product#5</span>
                <span class="description"></span>
                <div class="card-footer">
                  <button class="button style3 fit" data-sellix-product="62180460c22a1" type="submit" alt="Buy Now">Buy</button>
                  <span class="price">1.50 <span>EUR</span></span>
                </div>
              </div>
            </a>
          </div>
          <div class="grid">
            <a class="card" data-shoppy-product="">
              <div class="wrapper">
                <div class="image-wrapper">
                  <img src="{{ asset('images/test-product.jpg') }}">
                </div>
              </div>
              <div class="content">
                <span class="title">Product#6</span>
                <span class="description"></span>
                <div class="card-footer">
                  <button class="button style3 fit" data-sellix-product="62180461b238d" type="submit" alt="Buy Now">Buy</button>
                  <span class="price">1.50 <span>EUR</span></span>
                </div>
              </div>
            </a>
          </div>

          <div class="grid">
            <a class="card" data-shoppy-product="">
              <div class="wrapper">
                <div class="image-wrapper">
                  <img src="{{ asset('images/test-product.jpg') }}">
                </div>
              </div>
              <div class="content">
                <span class="title">Product#7</span>
                <span class="description"></span>
                <div class="card-footer">
                  <button class="button style3 fit" data-sellix-product="61c81515a2681" type="submit" alt="Buy Now">Buy</button>
                  <span class="price">1.00 <span>EUR</span></span>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>

@endsection