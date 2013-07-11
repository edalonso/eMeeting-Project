<?php

/* CmarMeetingBundle:Security:noaccess.html.twig */
class __TwigTemplate_de012566d7e32617f6a155bc50cf5372 extends Twig_Template
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
        echo "eMeeting
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "  <div class=\"np\" style=\"padding: 30px 10px 20px 60px; font-size: 17px; margin: 25px\">
      <table style=\"margin: 10px 0px 10px 100px\">
        <tbody>
          <tr>
            <td class=\"label\">
\t      You do not have access to this aplication.
            </td>
          </tr>
          <tr>
            <td class=\"label\">
\t\tYou have more information about this service in the <a style=\"font-weight: normal; text-decoration: none\" target=\"_blank\" href=\"http://digimar.campusdomar.es/colaboracion-audiovisual/videoconferencia-web/\">DigiMAR web</a>
            </td>
          </tr>
        </tbody>
      </table>

  </div>

";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:Security:noaccess.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
