@extends('layout.page')

@section ('content')
<section>

      <div class="slider">
         <div class="item">
            <img src="{{url('banner1.png')}}">
         </div>
      
         <div class="item" style="display:none">
            <img src="{{url('banner2.png')}}">
         </div>
      
      <a class="previous" onclick="previousSlide()">&#10094;</a>
         <a class="next" onclick="nextSlide()">&#10095;</a>
      </div>

      <main>
         <h2>Recently Added</h2>
         <div class='added'>
            <?php foreach($products as $product): ?>
               
               <div> 
                  <img src= <?= asset('storage/'.$product->image) ?> >
                  <a href="detail/<?= $product->id?>"><p><?= $product->name ?> </p></a>
               </div>
               
            <?php endforeach; ?>
         </div>
   
         <div class="subscribe">
            <h2>Subscribe</h2>
            <p>Want to receive a monthly newsletter and updates?</p>
            <div>
               <input type="text" placeholder="johnsmith@gmail.com">
               <input type='button' value='submit'></input>
            </div>
         </div>
      </main>
</section>
@endsection