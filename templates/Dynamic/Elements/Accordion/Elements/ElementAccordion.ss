<% if $Title && $ShowTitle %><h2 class="element__title">$Title</h2><% end_if %>
<% if $Content %><div class="element__content">$Content</div><% end_if %>

<% if $Panels %>
    <div id="accordion-{$ID}" class="element__accordion__list">
        <% loop $Panels %>
            <div class="card">
                <div class="card-header" id="accordion-{$Up.ID}-heading-{$Pos}">
                    <h3 class="mb-0">
                        <button class="btn btn-link btn-lg btn-block<% if not $First %> collapsed<% end_if %>" data-toggle="collapse" data-target="#accordion-{$Up.ID}-collapse-{$Pos}" aria-expanded="<% if $First %>true<% else %>false<% end_if %>" aria-controls="accordion-{$Up.ID}-collapse-{$Pos}">
                            $Title
                        </button>
                    </h3>
                </div>
                <div id="accordion-{$Up.ID}-collapse-{$Pos}" class="collapse<% if $First %> show<% end_if %>" aria-labelledby="accordion-{$Up.ID}-heading-{$Pos}" data-parent="#accordion-{$Up.ID}">
                    <% if $Image %>
                        <div class="col-md-5 img-side">
                            <img src="$Image.URL" class="img-fluid" alt="$Image.Title.ATT">
                        </div>
                    <% end_if %>
                    <div class="card-body">
                        $Content
                        <% if $ElementLink %>$ElementLink<% end_if %>
                    </div>
                </div>
            </div>
        <% end_loop %>
    </div>
<% end_if %>
