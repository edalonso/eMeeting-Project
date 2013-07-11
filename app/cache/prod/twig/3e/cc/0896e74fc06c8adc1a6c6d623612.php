<?php

/* CmarMeetingBundle:User:recordingList.html.twig */
class __TwigTemplate_3ecc0896e74fc06c8adc1a6c6d623612 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"container ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" class=\"np\" style=\"padding: 0px 20px; padding-bottom: 10px;\">
<br />
    <div class=\"np\" style=\"margin: 0px 0px 45px 25px; padding: 0px; background: none\">
      <label style=\"margin: 0px; font-size: 16px;\">URL to recordings <a href=\"#\" class=\"showr\" title=\"URL to view the recordings of this meeting.\"><i class=\"icon-help icon-white\"></i></a></label>
      <input style=\"width: 280px\" type=\"text\" readonly=\"readonly\" onclick=\"this.select()\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("recording_public_list", array("secretsalt" => $this->getAttribute($this->getContext($context, "meeting"), "secretsalt"))), "html", null, true);
        echo "\"/>
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "meeting"), "recordings"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recording"]) {
            // line 8
            echo "      <ul>
        <li style=\"font-weight: bolder; text-shadow: 0 1px 0 black; color: #FFFFFF;\">
\t  ";
            // line 10
            if (($this->getAttribute($this->getContext($context, "recording"), "state") == 0)) {
                // line 11
                echo "  \t    <a id=\"title_recording_public\" class=\"title\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index_public_recording", array("secretsalt" => $this->getAttribute($this->getContext($context, "recording"), "secretsalt"))), "html", null, true);
                echo "\" style=\"text-decoration: none; color: #0F8B1D;text-shadow: none;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "recording"), "title"), "html", null, true);
                echo "</a>
\t    <form class=\"edit_title_recording_form\" data-id=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "recording"), "id"), "html", null, true);
                echo "\" data-title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "recording"), "title"), "html", null, true);
                echo "\" style=\"display: none;\">
\t      <input name=\"id_recording\"  value=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "recording"), "id"), "html", null, true);
                echo "\" type=\"hidden\">
\t      <input name=\"caja_recording\" class=\"caja_recording\" value=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "recording"), "title"), "html", null, true);
                echo "\" type=\"text\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "recording"), "title"), "html", null, true);
                echo "\">
\t      <button class=\"save_recording button\" style=\"padding: 0px; width: 24px; height: 24px;\" type=\"submit\"><i class=\" icon-enabled icon-black\"></i></button>
\t      <button class=\"cancel_recording button\" style=\"padding: 0px; width: 24px; height: 24px;\"><i class=\"icon-disabled icon-black\"></i></button>
\t    </form>
\t  ";
            } elseif (($this->getAttribute($this->getContext($context, "recording"), "state") == 2)) {
                // line 19
                echo "\t    <a id=\"title_recording_private\" href=\"#\" onclick=\"return false\" style=\"color: #7F8080; text-shadow: none; text-decoration:none\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "recording"), "title"), "html", null, true);
                echo "</a>
\t  ";
            } else {
                // line 21
                echo "  \t    <a id=\"title_recording_closed\" class=\"title\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index_public_recording", array("secretsalt" => $this->getAttribute($this->getContext($context, "recording"), "secretsalt"))), "html", null, true);
                echo "\" style=\"text-decoration: none; color: #E94646; text-shadow: none;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "recording"), "title"), "html", null, true);
                echo "</a>
\t    <form class=\"edit_title_recording_form\" data-id=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "recording"), "id"), "html", null, true);
                echo "\" data-title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "recording"), "title"), "html", null, true);
                echo "\" style=\"display: none;\">
\t      <input name=\"id_recording\"  value=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "recording"), "id"), "html", null, true);
                echo "\" type=\"hidden\">
\t      <input name=\"caja_recording\" class=\"caja_recording\" value=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "recording"), "title"), "html", null, true);
                echo "\" type=\"text\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "recording"), "title"), "html", null, true);
                echo "\">
\t      <button class=\"save_recording button\" style=\"padding: 0px; width: 24px; height: 24px;\" type=\"submit\"><i class=\" icon-enabled icon-black\"></i></button>
\t      <button class=\"cancel_recording button\" style=\"padding: 0px; width: 24px; height: 24px;\"><i class=\"icon-disabled icon-black\"></i></button>
\t    </form>
\t  ";
            }
            // line 29
            echo "\t  <span style=\"font-size: 12px; font-style: italic; margin: 5px 0px 5px 10px; padding-bottom: 5px; text-shadow: none;\"> at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "recording"), "datecreated"), "Y-m-d H:i"), "html", null, true);
            echo "</span>
\t  <button class=\"editar_title_recording\" style=\"";
            // line 30
            if (($this->getAttribute($this->getContext($context, "user"), "id") != $this->getAttribute($this->getAttribute($this->getContext($context, "meeting"), "owner"), "id"))) {
                echo "display: none;";
            }
            echo "padding: 0px; width: 20px; height: 20px;\"><i class=\"icon-edit icon-black\"></i></button>
           <div class=\"btn-group\" data-toggle=\"buttons-radio\" style=\"";
            // line 31
            if (($this->getAttribute($this->getContext($context, "user"), "id") != $this->getAttribute($this->getAttribute($this->getContext($context, "meeting"), "owner"), "id"))) {
                echo "display: none; ";
            } else {
                echo "display: inline-block; ";
            }
            echo "vertical-align: middle;\">
             <a href=\"#\" class=\"btn";
            // line 32
            if (($this->getAttribute($this->getContext($context, "recording"), "state") == 0)) {
                echo " active";
            }
            echo "\" style=\"font-size: 12px; font-weight: normal; height: 10px; line-height: 0.8; width: 35px; text-decoration: none; box-shadow: none;\" ";
            if (($this->getAttribute($this->getContext($context, "user"), "id") == $this->getAttribute($this->getAttribute($this->getContext($context, "meeting"), "owner"), "id"))) {
                echo " onclick=\"\$('#dialog-modal-recordings-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
                echo "').load('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("locked_recording", array("secretsalt" => $this->getAttribute($this->getContext($context, "recording"), "secretsalt"), "locked" => 1)), "html", null, true);
                echo "'); return false;\" ";
            }
            echo ">Public</a>
\t     <a href=\"#\" class=\"btn";
            // line 33
            if (($this->getAttribute($this->getContext($context, "recording"), "state") == 1)) {
                echo " active";
            }
            echo "\" style=\"font-size: 12px; font-weight: normal; height: 10px; line-height: 0.8; width: 35px; text-decoration: none; box-shadow: none;\"";
            if (($this->getAttribute($this->getContext($context, "user"), "id") == $this->getAttribute($this->getAttribute($this->getContext($context, "meeting"), "owner"), "id"))) {
                echo " onclick=\"\$('#dialog-modal-recordings-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
                echo "').load('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("locked_recording", array("secretsalt" => $this->getAttribute($this->getContext($context, "recording"), "secretsalt"), "locked" => 0)), "html", null, true);
                echo "'); return false;\" ";
            }
            echo ">Private</a>
\t     <a  href=\"#\" class=\"btn";
            // line 34
            if (($this->getAttribute($this->getContext($context, "recording"), "state") == 2)) {
                echo " active";
            }
            echo "\" style=\"font-size: 12px; font-weight: normal; height: 10px; line-height: 0.8; width: 35px; text-decoration: none; box-shadow: none;\" ";
            if (($this->getAttribute($this->getContext($context, "user"), "id") == $this->getAttribute($this->getAttribute($this->getContext($context, "meeting"), "owner"), "id"))) {
                echo " onclick=\"\$('#dialog-modal-recordings-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
                echo "').load('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("locked_recording", array("secretsalt" => $this->getAttribute($this->getContext($context, "recording"), "secretsalt"), "locked" => 2)), "html", null, true);
                echo "'); return false;\" ";
            }
            echo ">Closed</a>
          </div>
\t  <div style=\"width: 100%\">
\t    <input type=\"text\" readonly=\"readonly\" style=\"border: 1px solid #ccc; width: 52%; margin: 10px 0px 10px 10px;";
            // line 37
            if ((($this->getAttribute($this->getContext($context, "recording"), "state") != 0) && ($this->getAttribute($this->getContext($context, "user"), "id") != $this->getAttribute($this->getAttribute($this->getContext($context, "meeting"), "owner"), "id")))) {
                echo " display: none;";
            }
            echo "\" onclick=\"this.select()\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index_public_recording", array("secretsalt" => $this->getAttribute($this->getContext($context, "recording"), "secretsalt"))), "html", null, true);
            echo "\" /><span style=\"margin-left: 5px;";
            if ((($this->getAttribute($this->getContext($context, "recording"), "state") != 0) && ($this->getAttribute($this->getContext($context, "user"), "id") != $this->getAttribute($this->getAttribute($this->getContext($context, "meeting"), "owner"), "id")))) {
                echo " display: none;";
            }
            echo "\">Access to this recording</span>
\t  </div>
\t</li>
      </ul>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "      <center style=\"font-size: 25px; margin-bottom: 5px\">No recordings at <br />\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
            echo "\"</center>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recording'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 44
        echo "    <div style=\"margin-left: 75%; margin-bottom: 10px\">
      <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\" style=\"margin-top: 25px; font-size: 12px; text-decoration: none\" class=\"button\">Cancel</a>
    </div>
</div>

<script type=\"text/javascript\">
  function change()
  {
    document.getElementById(title_recording_private).style.color=\"#7F8080\";
    document.getElementById(title_recording_closed).style.color=\"#E94646\";
    document.getElementById(title_recording_public).style.color=\"#0F8B1D\";
  }
</script>
<script type=\"text/javascript\">
  \$('.editar_title_recording').click( function(e){
      var p = \$(this).parent();
      p.find('.title').hide();
      p.find('.edit_title_recording_form').show();
      p.find('.cancel_recording').show();
  });

  \$('.cancel_recording').click( function(e){
      var p = \$(this).parent();
      p.find('.title').show();
      p.find('.edit_title_recording_form').hide();
      p.find('.cancel_recording').hide();
  });

  \$('.edit_title_recording_form').submit(function() {
      var p = \$(this).parent();
      \$.ajax({
          type: 'POST',
          url: \"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("safe_title_recording"), "html", null, true);
        echo "\",
          data: \$(this).serialize(),
          // Mostramos un mensaje con la respuesta de PHP
          success: function(data) {
              p.find('.title').text(p.find('.caja_recording').val());
              p.find('.title').show();
              p.find('.edit_title_recording_form').hide();
              p.find('.cancel_recording').hide();
          }
      })        
      return false;
   });
</script>
";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:User:recordingList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
