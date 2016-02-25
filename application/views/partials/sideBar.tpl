<aside class="sidebar-left">
        <a class="company-logo" href="{base_url()}">Logo</a>

        <div class="sidebar-links">
                <a class="link-blue {if isMenuOn("") || isMenuOn("Resume")}selected{/if}" href="{base_url()}Resume"><i class="fa fa-server"></i>Resume</a>
                <a class="link-red {if isMenuOn("Project")}selected{/if}" href="{base_url()}Project"><i class="fa fa-keyboard-o"></i>Projects</a>
                <a class="link-yellow {if isMenuOn("Skill")}selected{/if}" href="{base_url()}Skill"><i class="fa fa-bar-chart"></i>Skills</a>
                <a class="link-green {if isMenuOn("Job")}selected{/if}" href="{base_url()}Job"><i class="fa fa-building-o"></i>Jobs</a>
        </div>
</aside>