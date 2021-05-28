<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<!-- created with Free Online Sitemap Generator www.xml-sitemaps.com -->

<url>
  <loc>https://lostcenturia.gg/en</loc>
  <lastmod>2020-10-15T17:18:25+00:00</lastmod>
</url>

<url>
  <loc>https://lostcenturia.gg/en/monsters</loc>
  <changefreq>weekly</changefreq>
  <priority>0.9</priority>
</url>

<url>
  <loc>https://lostcenturia.gg/en/comps</loc>
  <changefreq>weekly</changefreq>
  <priority>0.9</priority>
</url>

<url>
  <loc>https://lostcenturia.gg/en/comps-builder</loc>
  <changefreq>weekly</changefreq>
  <priority>0.9</priority>
</url>

<url>
  <loc>https://lostcenturia.gg/en/terms-of-use</loc>
  <changefreq>weekly</changefreq>
  <priority>0.9</priority>
</url>

@foreach ($monsters as $monster)
    <url>
        <loc>http://lostcenturia.gg/en/monsters/{{ $monster->slug }}</loc>
        <image:image>
            <image:loc>http://lostcenturia.gg/images/game/main_images/{{ $monster->main_image }}</image:loc>
        </image:image>
        <image:image>
            <image:loc>http://lostcenturia.gg/images/game/og_images/{{ $monster->fr_og_image }}</image:loc>
        </image:image>
        <image:image>
            <image:loc>http://lostcenturia.gg/images/game/bg_images/{{ $monster->bg_image }}</image:loc>
        </image:image>
        <image:image>
            <image:loc>http://lostcenturia.gg/images/game/bc_images/{{ $monster->bg_comp_image }}</image:loc>
        </image:image>
        <image:image>
            <image:loc>http://lostcenturia.gg/images/game/icon_images/{{ $monster->icon_image }}</image:loc>
        </image:image>
        <lastmod>{{ $monster->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
@endforeach

@foreach ($team_comps as $team_comp)
    <url>
        <loc>http://lostcenturia.gg/en/comps/{{ $team_comp->c_slug }}</loc>
        <lastmod>{{ $team_comp->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
@endforeach

@foreach ($rune_sets as $rune_set)
    @php
        $monster = DB::Table('monsters')->where('id', $rune_set->rs_monster_id)->first();
    @endphp
    <url>
        <loc>http://lostcenturia.gg/en/add-rune-set/{{ $monster->name }}</loc>
        <lastmod>{{ $rune_set->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
@endforeach

@foreach ($users as $user)
    <url>
        <loc>http://lostcenturia.gg/en/user/{{ $user->slug }}</loc>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
@endforeach

@foreach ($users as $user)
    <url>
        <loc>http://lostcenturia.gg/en/user-private/{{ $user->slug }}</loc>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
@endforeach

</urlset>