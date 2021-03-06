<?php

/* CmarMeetingBundle:Meeting:edit.html.twig */
class __TwigTemplate_1a0a74390cbeb21fd34aa86c33cfcb18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CmarMeetingBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "eMeeting Admin
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 8
            echo "  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
            echo "\" style=\"text-decoration:none\"><button class=\"button\" style=\"margin: 0px 0px 5px 0px\"><i class=\"icon-admin icon-black\"></i> Index</button></a>
";
        }
        // line 10
        echo "<h1 style=\"color: black\">Meeting edit</h1>

<form action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("meeting_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "edit_form"));
        echo ">

<table>
  <tr>
    <th>Title</th>
    <td> ";
        // line 17
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "title"));
        echo "</td>
  </tr>
  <tr>
    <th>Description</th>
    <td>";
        // line 21
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "description"));
        echo "</td>
  </tr>
  <tr>
    <th>Magic</th>
    <td>";
        // line 25
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "magic"));
        echo "</td>
  </tr>
  <tr>
    <th>Public</th>
    <td>";
        // line 29
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "public"));
        echo "</td>
  </tr>
  <tr>
    <td style=\"display: none\">";
        // line 32
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "users"));
        echo "</td>
  </tr>
  <tr>
    <td style=\"display: none\">";
        // line 35
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "owner"));
        echo "</td>
  </tr>
  <tr>
    <th>User</th>
    <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getContext($context, "entity"), "users"), ", "), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <th>Owner</th>
    <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "owner"), "html", null, true);
        echo "</td>
  </tr>
";
        // line 45
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "edit_form"));
        echo "
</table>
    <p>
        <button class=\"button_admin\" type=\"submit\">Edit</button>
    </p>
</form>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("meeting"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    ";
        // line 64
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:Meeting:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
