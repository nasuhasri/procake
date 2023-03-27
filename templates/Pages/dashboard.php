<h1>My Dashboard Home at Pages</h1>

<div class="page-title">
  <div class="title_left">
    <h3>Dashboard</h3>
  </div>
</div>

<div class="clearfix"></div>

<div class="row">
    <div class="top_tiles">
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6" style="background-color: #071C3D; color: black;">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
                <div class="count"><?= $countMembers ?></div>
                <h3>Members</h3>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6" style="background-color: #071C3D; color:black;">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-comments-o"></i></div>
                <div class="count"><?= $countBooks ?></div>
                <h3>Books</h3>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6" style="background-color: #071C3D; color:black;">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                <div class="count"><?= $countNewspapers ?></div>
                <h3>Newspapers</h3>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6" style="background-color: #071C3D; color:black;">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-check-square-o"></i></div>
                <div class="count"><?= $countMagazines ?></div>
                <h3>Magazines</h3>
            </div>
        </div>
    </div>
</div>