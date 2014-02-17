<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MID Utstyrsbooking</title>
    <link rel="stylesheet" href="stylesheets/app.css" />
    <script src="bower_components/modernizr/modernizr.js"></script>
  </head>
  <body>
    <div class="row">
      <div class="large-12 columns">
        <h1>MID-utstyrsbooking</h1>
      </div>
    </div>
    
    <div class="row">
      <div class="large-12 columns">
        <div class="panel">
          <p>Dette skjemaet gjelder kun for nåværende studenter på MID (og MEK). Dette er en prøveordning for 2014.
            Øvrige henvendelser fra andre må gå via epost, se info om det på http://bit.ly/midutstyrekstern </p>
            <p>****
            MID-ere: <br />Når du sender inn skjema bekrefter du samtidig at du er kjent med<a href="https://docs.google.com/document/d/1_VaHlKezR4INxWYnT5uBqkbKLpyhYU0JLVsW20nWNAA/edit?usp=sharing"> reglene for utlån og bruk av utstyr</a>. Brudd på reglene får følger. 
            
            
            **** 
           </p>
        </div>
      </div>
    </div>

    <div class="row">  
    	<div class="large-12 columns">
        <form>
          <div class="row">
            <div class="large-12 columns">
              <label>Navn (Fornavn / etternavn)</label>
              <input type="text" placeholder="Ditt fulle navn" name="navn"/>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>Telefonnummer</label>
              <input type="number" placeholder="Ditt tlf.nr her" name="tlf"/>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>E-post</label>
              <input type="email" placeholder="Vær nøye, skriv riktig adresse" name="email"/>
            </div>
          </div>          
          <div class="row">
            <div class="large-12 columns">
              <label>Sammenheng (emne / prosjekt / oppdrag)</label>
              <select>
                <option value="MID131">MID131 - Innføring i Medieproduksjon</option>
                <option value="MID115">MID115 - Praktisk Medieproduksjon</option>
                <option value="MID117">MID117 - Flerkameraprodukosjon</option>
                <option value="MKP101">MKP101 - Prosjekt/praksis </option>
                <option value="MID203">MID203 - Bachelor</option>
                <option value="DR115">DR115 - From Script to Screen</option>
                <option value="PAI101">PAI101 - Photo, Art, Illustration</option>
                <option value="NFT101">NFT101 - NatureFirst</option>
                <option value="NFT101" onSelect="document.getElementById('form_formaal_anna').style.visibility='visible'">NFT101 - NatureFirst</option>
				</select>
            <div class="large-12 columns hidden-field" id="form_formaal_anna" style="display:none;">
              <label>Anna</label>
              <input type="email" placeholder="Vær nøye, skriv riktig adresse" name="email"/>
            </div>

            </div>
          </div>
          <div class="row">
            <div class="medium-6 columns">
              <label>Utlån - tidspunkt</label>
              <input type="date" placeholder="Velg tidspunkt" name="tid_fra"/>
            </div>
	        <div class="medium-6 columns">
              <label>Innlevering</label>
              <input type="date" placeholder="Velg tidspunkt" name="tid_fra"/>
            </div>            
          </div>  
          <div class="row">
            <div class="large-12 columns">
              <label>Formål</label>
              <textarea placeholder="Beskriv kva du skal bruke utstyret til" name="formaal"></textarea>
            </div>
          </div>  
          <div class="row">
            <div class="large-12 columns">
              <label>Ønska utstyr</label>
              <textarea placeholder="List opp utstyret du ønsker låne."></textarea>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>Ekstra informasjon</label>
              <textarea placeholder="Er det noe du vil gjøre oppmerksom på, skriv det her."></textarea>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>Betalt oppdrag</label>
              <input type="radio" name="betaltJa" value="ja" id="betaltJa"><label for="betaltJa">Ja</label>
              <input type="radio" name="betaltNei" value="nei" id="betaltNei"><label for="betaltNei">Nei</label>
            </div>
           </div>
          <div class="row">
            <div class="large-12 columns">
              <p><a href="#" class="small button">Simple Button</a><br/>
            </div>
           </div>

          </div>                    
        </form>
      </div>
      </div>
    </div>

    <script src="bower_components/jquery/jquery.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
