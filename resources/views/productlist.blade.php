<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.product {
  /* font-family: sans-serif; */
  /* font-size: 7rem; */
  font-weight: light;
  color: white;
  /* display: flex; */
  align-items: center;
  justify-content: center;
}

/*CSS Grid Stuff*/
.products {
    list-style-type: none;
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(auto-fill,minmax(200px, 1fr));
    grid-auto-flow: row;
}

.product {
    min-height: 50px;
    /* background-color: teal; */
}

.product.wide {
    grid-column-end: span 2;
    background-color: rebeccapurple;
}

.product.tall {
    background-color: orange;
    grid-row-end: span 2;
}

    </style>
<ul class="products">
          
            @foreach ($alldata as $data)
<div class="row">
  <div class="column" style="background-color:#acsb;">
    <h2 class="product">{{$data->name}}</h2>
    <h2 class="product">{{$data->price}}</h2>
    <a href="{{url('productdetails',[$data->id])}}"><button  class="btn-sm">Buy now</button>  </a>

  </div>
 
  </div>


  @endforeach 
        </ul>