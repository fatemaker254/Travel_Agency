<!-- <style>
  .interest-section {
    max-width: 1200px;
    margin: 50px auto;
    padding: 0 20px;
    font-family: 'Segoe UI', sans-serif;
  }

  .section-header {
    text-align: center;
    margin-bottom: 30px;
  }

  .section-header h2 {
    font-size: 26px;
    font-weight: bold;
    color: #444;
  }

  .section-header p {
    color: #666;
    font-size: 16px;
    line-height: 1.6;
    max-width: 700px;
    margin: 0 auto;
  }

  .gallery-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-template-rows: repeat(2, 220px);
    grid-gap: 15px;
    grid-template-areas:
      "beach beach wellness theme"
      "tea   wine    wine    theme";
  }

  .gallery-item {
    position: relative;
    background-size: cover;
    background-position: center;
    border-radius: 10px;
    overflow: hidden;
    display: flex;
    align-items: flex-end;
    justify-content: center;
    transition: transform 0.3s;
    height: 100%;
  }

  .gallery-item span {
    background: rgba(0, 0, 0, 0.5);
    color: white;
    font-weight: bold;
    padding: 10px 15px;
    font-size: 16px;
    width: 100%;
    text-align: center;
    letter-spacing: 1px;
  }

  .gallery-item:hover {
    transform: scale(1.02);
  }

  /* Assigning grid areas */
  .beach {
    grid-area: beach;
  }

  .wellness {
    grid-area: wellness;
  }

  .theme {
    grid-area: theme;
  }

  .tea {
    grid-area: tea;
  }

  .wine {
    grid-area: wine;
  }
</style> -->

<style>
  .interest-section {
    max-width: 1200px;
    margin: 50px auto;
    padding: 0 20px;
    font-family: 'Segoe UI', sans-serif;
  }

  .section-header {
    text-align: center;
    margin-bottom: 30px;
  }

  .section-header h2 {
    font-size: 26px;
    font-weight: bold;
    color: #444;
  }

  .section-header p {
    color: #666;
    font-size: 16px;
    line-height: 1.6;
    max-width: 700px;
    margin: 0 auto;
  }

  .gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
    gap: 15px;
  }

  .gallery-item {
    position: relative;
    height: 200px;
    background-size: cover;
    background-position: center;
    border-radius: 10px;
    overflow: hidden;
    display: flex;
    align-items: flex-end;
    justify-content: center;
    transition: transform 0.3s;
  }

  .gallery-item.large {
    grid-column: span 2;
    height: 250px;
  }

  .gallery-item span {
    background: rgba(0, 0, 0, 0.5);
    color: white;
    font-weight: bold;
    padding: 10px 15px;
    font-size: 16px;
    letter-spacing: 1px;
    width: 100%;
    text-align: center;
  }

  .gallery-item:hover {
    transform: scale(1.02);
  }

  /* Mobile optimization */
  @media (max-width: 768px) {
    .gallery-grid {
      grid-template-columns: 1fr 1fr;
    }

    .gallery-item.large {
      grid-column: span 2;
      height: 220px;
    }

    .gallery-item span {
      font-size: 14px;
      padding: 8px;
    }
  }

  @media (max-width: 480px) {
    .gallery-grid {
      grid-template-columns: 1fr;
    }

    .gallery-item,
    .gallery-item.large {
      grid-column: span 1;
      height: 180px;
    }

    .gallery-item span {
      font-size: 14px;
      padding: 6px;
    }
  }
</style>


<section class="interest-section">
  <div class="section-header">
    <h2>HOLIDAYS TO MATCH YOUR INTEREST</h2>
    <p>
      Combine your passion with the joy of discovering a new place with our special interest holidays.
      From sports and tea vacations to wine trails and wellness retreats, here’s an inspiring take on holidays.
    </p>
  </div>

  <div class="gallery-grid">
    <div class="gallery-item beach" style="background-image: url('./assets/images/gallery-1.jpg');">
      <span>BEACH HOLIDAYS</span>
    </div>
    <div class="gallery-item wellness" style="background-image: url('./assets/images/gallery-2.jpg');">
      <span>WELLNESS & SPA HOLIDAYS</span>
    </div>
    <div class="gallery-item theme" style="background-image: url('./assets/images/gallery-3.jpg');">
      <span>THEME PARKS</span>
    </div>
    <div class="gallery-item tea" style="background-image: url('./assets/images/gallery-4.jpg');">
      <span>TEA TRAIL</span>
    </div>
    <div class="gallery-item wine" style="background-image: url('./assets/images/gallery-5.jpg');">
      <span>WINE TRAILS</span>
    </div>
  </div>
</section>