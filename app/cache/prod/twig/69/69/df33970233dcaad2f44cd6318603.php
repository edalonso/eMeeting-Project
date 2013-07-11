<?php

/* CmarMeetingBundle:User:admin.html.twig */
class __TwigTemplate_6969df33970233dcaad2f44cd6318603 extends Twig_Template
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
        echo "
";
        // line 8
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 9
            echo "  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
            echo "\" style=\"text-decoration:none\"><button class=\"button\"><i class=\"icon-admin icon-black\"></i> Index</button></a>
";
        }
        // line 11
        echo "
<div style=\"margin: 10px\">
  Admin:
  <ul>
    <li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("meeting"), "html", null, true);
        echo "\" style=\"color: #000\">Admin Meeting</a></li>
    <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user"), "html", null, true);
        echo "\" style=\"color: #000\">Admin User</a></li>
    <li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group"), "html", null, true);
        echo "\" style=\"color: #000\">Admin Group</a></li>
  </ul>
  
  <div class=\"graphs\">
    
    <div id=\"grafico2\">
      <h2 class=\"ghead\">
\t<span class=\"dir\">
\t  Use
\t  <kbd>←</kbd>
\t  and
\t  <kbd>→</kbd>
\t  to navigate
\t</span>
      </h2>
    </div>
    
    <div id=\"grafico1\">
      
    </div>
  </div>
  
</div>

<script type=\"text/javascript\">
\$(document).keydown(function(e){
    dataPOST1 = data1[0][1][1];
    dataPOST2 = data2[0][1][1];

    if (e.keyCode == 37) {//restar un mes
       \$.ajax({
           type:\"POST\",
           dataType: \"json\",
           url: \"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_bars"), "html", null, true);
        echo "\",
           data: \"month_log=\"+dataPOST1+\"&month_log_total=\"+dataPOST2+\"&mode=less\",
           success: function(data) {
             if (data['data'] != '' && data['data_total'] != ''){
                data1 = [];
                data2 = [];
                \$.each(data['data'], function(index, value) {
                  data1.push([data['data'][index]['participants'], [data['data'][index]['participants'], data['data'][index]['datetime'], data['data'][index]['scoId']]]);
                });
                \$.each(data['data_total'], function(index, value) {
                  data2.push([data['data_total'][index]['active_rooms'], [data['data_total'][index]['active_rooms'], data['data_total'][index]['datetime']]]);
                });
                \$('.karmicgraph').hide();
                \$('#grafico1').karmicGraph(data1, {
                  'outLabel': 'Participants by eMeeting',
                  'color': 'blue',
                  'label': '{0} participants in eMeeting {2} at {1}',
                  'type': 'flatbars',
                  'freeColumn' : 1
                });
                \$('#grafico2').karmicGraph(data2, {
                  'outLabel': 'Active Rooms by Day',
                  'color': 'blue',
                  'label': '{0} active rooms at {1}',
                  'type': 'flatbars',
                  'freeColumn' : 1
                });
             } else {
               alert('No data for selected this date');
             }
           },
           error: function(err) {
               if (err.status == 200) {
                  ParseResult(err);
               } else { 
                  console.log('Error:' + err.responseText + '  Status: ' + err.status); 
               }
           }
       });
    } else if (e.keyCode == 39) {
       \$.ajax({
           type:\"POST\",
           dataType: \"json\",
           url: \"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_bars"), "html", null, true);
        echo "\",
           data: \"month_log=\"+dataPOST1+\"&month_log_total=\"+dataPOST2+\"&mode=more\",
           success: function(data) {
             if (data['data'] != '' && data['data_total'] != ''){
               data1 = [];
               data2 = [];
               \$.each(data['data'], function(index, value) {
                 data1.push([data['data'][index]['participants'], [data['data'][index]['participants'], data['data'][index]['datetime'], data['data'][index]['scoId']]]);
               });
               \$.each(data['data_total'], function(index, value) {
                 data2.push([data['data_total'][index]['active_rooms'], [data['data_total'][index]['active_rooms'], data['data_total'][index]['datetime']]]);
               });
               \$('.karmicgraph').hide();
               \$('#grafico1').karmicGraph(data1, {
                 'outLabel': 'Participants by eMeeting',
                 'color': 'blue',
                 'label': '{0} participants in eMeeting {2} at {1}',
                 'type': 'flatbars',
                 'freeColumn' : 1
               });
               \$('#grafico2').karmicGraph(data2, {
                 'outLabel': 'Active Rooms by Day',
                 'color': 'blue',
                 'label': '{0} active rooms at {1}',
                 'type': 'flatbars',
                 'freeColumn' : 1
               });
             } else {
               alert('No data for selected this date');
             }
           },
           error: function(err) {
               if (err.status == 200) {
                  ParseResult(err);
               } else { 
                  console.log('Error:' + err.responseText + '  Status: ' + err.status); 
               }
           }
       });
    }
});
\$(document).ready(function() {
    data1 = [";
        // line 135
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "data"));
        foreach ($context['_seq'] as $context["_key"] => $context["datos"]) {
            echo " [";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "datos"), "participants"), "html", null, true);
            echo ", [\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "datos"), "participants"), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "datos"), "datetime"), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "datos"), "scoId"), "html", null, true);
            echo "\"]],";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['datos'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo "];
    data2 = [";
        // line 136
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "data_total"));
        foreach ($context['_seq'] as $context["_key"] => $context["datos"]) {
            echo " [";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "datos"), "active_rooms"), "html", null, true);
            echo ", [\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "datos"), "active_rooms"), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "datos"), "datetime"), "html", null, true);
            echo "\"]],";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['datos'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo "];

    \$('#grafico1').karmicGraph(data1, {
        'outLabel': 'Participants by eMeeting',
        'color': 'blue',
        'label': '{0} participants in eMeeting {2} at {1}',
        'type': 'flatbars',
        'freeColumn' : 1
    });

    \$('#grafico2').karmicGraph(data2, {
        'outLabel': 'Active Rooms by Day',
        'color': 'blue',
        'label': '{0} active rooms at {1}',
        'type': 'flatbars',
        'freeColumn' : 1
    });
    dataPOST1 = data1[0][1][1];
    dataPOST2 = data2[0][1][1];
});
</script>

";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:User:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
