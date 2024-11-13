
<style class="longlist-css herm-container-css">

  :root { 

  --longlist-element-a-current-base: var(--brandcolor);   
  }

 

  .longlist .content {  }


  .eherm-container .content {

    columns: 1;
    column-gap: 1rem; 

  }
  @media (min-width: 795px)  {
    .eherm-container .content { columns: 2; }
  }
  @media (min-width: 1009px)  {
    .eherm-container .content { columns: 3; }
  }
  @media (min-width: 1265px)  {
    .eherm-container .content { columns: 4; }
  }
  @media (min-width: 1351px)  {
    .eherm-container .content { columns: 5; }
  }
  @media (min-width: 1665px)  {
    .eherm-container .content { columns: 6; }
  }
  @media (min-width: 1785px)  {
    .eherm-container .content { columns: 7; }
  }
  @media (min-width: 1905px)  {
    .eherm-container .content { columns: 8; }
  }



  .longlist .element { }
  .longlist .element a { break-inside: avoid; padding-top: .5556rem; padding-bottom: .5556rem; }
    @media  (min-width: 896px),(min-height: 896px) {
      .longlist .element a { padding-top: .1111rem; padding-bottom: .1111rem; }
    }
  .longlist .element a:hover { opacity: 1 !important; background: rgb(var(--site_brand_color)); color: rgb(var(--brightcolor));  }




  <?php /*
    */ ?>
  .herm-container {
    display:grid;
    grid-template-rows:20px 20px 20px;
    grid-auto-columns:20px;
    grid-auto-flow:column dense;
  }

  .herm-container > div:nth-child(6n + 4) { grid-row:3; }
  .herm-container > div:nth-child(6n + 5) { grid-row:2; }


  .herm-container {
    grid-gap:5px;
    counter-reset:num;
    margin:10px;
  }

  .herm-container > div {
    border:1px solid;
  }
  .herm-container > div:before{
    content:counter(num);
    counter-increment:num;
  }





</style>