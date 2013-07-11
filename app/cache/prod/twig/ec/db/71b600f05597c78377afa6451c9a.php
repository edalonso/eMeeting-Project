<?php

/* CmarMeetingBundle:Security:recoverUpdate.html.twig */
class __TwigTemplate_ecdb71b600f05597c78377afa6451c9a extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div style=\"font-weight: bolder; text-align:center; text-shadow: 0px 1px 0px black\">
  <div style=\"font-size: 36px; padding: 20px\"><span class=\"icon check\"></span>  Welcome to Campus do Mar!</div>
  <div>Password reset correctly</div>
  <div style=\"margin: 20px 235px 0px; text-shadow: 0px 1px 0px black; border: solid 2px\"><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\" style=\"text-decoration: none; color:#FFF\">Return to the aplication</a></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:Security:recoverUpdate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
