<?php

/* modules/custom/gobear_jobs/templates/job-listings.html.twig */
class __TwigTemplate_55bffdf6ca4424ebfc17494d4fcca7ba6dfe374b0540f216755caf1b3cfca535 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("for" => 8);
        $filters = array("raw" => 25);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for'),
                array('raw'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 7
        echo "<div class=\"jobs-list\">
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 9
            echo "<div class=\"job-item panel panel-default\">
        <div class=\"panel-body\">
            <h2 class=\"job-title\">";
            // line 11
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["job"], "title", array()), "html", null, true));
            echo "</h2>
            <div class=\"row job-info\">
                <div class=\"col-sm-10\">
                    <div class=\"job-section\">
                        <span class=\"job-company\"><a href=\"";
            // line 15
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["job"], "url", array()), "html", null, true));
            echo "\">@";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["job"], "company", array()), "html", null, true));
            echo "</a></span><span class=\"spit\"> | </span><span class=\"job-location\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["job"], "location", array()), "html", null, true));
            echo "</span>
                    </div>
                    <div class=\"job-section\">
                        <span class=\"created_at\">Published ";
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["job"], "created_at", array()), "html", null, true));
            echo " ago</span><span class=\"spit\"> | </span> <span class=\"team\">Tech Team</span>
                    </div>
                    <div class=\"job-section\">
                        <a data-toggle=\"collapse\" href=\"#collapse__";
            // line 21
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true));
            echo "\">
                            More info >
                        </a>
                        <div id=\"collapse__";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true));
            echo "\" class=\"panel-collapse collapse\">
                            ";
            // line 25
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["job"], "description", array())));
            echo "
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-2 text-align-right\">
                    <button type=\"button\" class=\"btn btn-success btn-job-type\">";
            // line 30
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["job"], "type", array()), "html", null, true));
            echo "</button>
                </div>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/gobear_jobs/templates/job-listings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  95 => 30,  87 => 25,  83 => 24,  77 => 21,  71 => 18,  61 => 15,  54 => 11,  50 => 9,  46 => 8,  43 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Default theme implementation to present a list of GoBear Job Listings.
 */
#}
<div class=\"jobs-list\">
{% for job in jobs %}
<div class=\"job-item panel panel-default\">
        <div class=\"panel-body\">
            <h2 class=\"job-title\">{{ job.title }}</h2>
            <div class=\"row job-info\">
                <div class=\"col-sm-10\">
                    <div class=\"job-section\">
                        <span class=\"job-company\"><a href=\"{{ job.url }}\">@{{ job.company }}</a></span><span class=\"spit\"> | </span><span class=\"job-location\">{{ job.location }}</span>
                    </div>
                    <div class=\"job-section\">
                        <span class=\"created_at\">Published {{ job.created_at }} ago</span><span class=\"spit\"> | </span> <span class=\"team\">Tech Team</span>
                    </div>
                    <div class=\"job-section\">
                        <a data-toggle=\"collapse\" href=\"#collapse__{{ job.id }}\">
                            More info >
                        </a>
                        <div id=\"collapse__{{ job.id }}\" class=\"panel-collapse collapse\">
                            {{ job.description | raw }}
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-2 text-align-right\">
                    <button type=\"button\" class=\"btn btn-success btn-job-type\">{{ job.type }}</button>
                </div>
            </div>
        </div>
    </div>
{% endfor %}
</div>", "modules/custom/gobear_jobs/templates/job-listings.html.twig", "C:\\xampp\\htdocs\\qed-42\\modules\\custom\\gobear_jobs\\templates\\job-listings.html.twig");
    }
}
