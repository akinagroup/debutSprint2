<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_bc278c748fffb01d18fdf5e29139e95c67060ea4d87165d740718584ba801a44 extends Twig_Template
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
        $__internal_0c6afc5da94aba1cfa025bceaff4d2aa16cf3faa840bc862e1ca73e26e5514d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c6afc5da94aba1cfa025bceaff4d2aa16cf3faa840bc862e1ca73e26e5514d4->enter($__internal_0c6afc5da94aba1cfa025bceaff4d2aa16cf3faa840bc862e1ca73e26e5514d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_352c23d5f3341795ff4f5dd4092c719e7abe09cd7a8ef276b33f675a3a7359c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_352c23d5f3341795ff4f5dd4092c719e7abe09cd7a8ef276b33f675a3a7359c4->enter($__internal_352c23d5f3341795ff4f5dd4092c719e7abe09cd7a8ef276b33f675a3a7359c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_0c6afc5da94aba1cfa025bceaff4d2aa16cf3faa840bc862e1ca73e26e5514d4->leave($__internal_0c6afc5da94aba1cfa025bceaff4d2aa16cf3faa840bc862e1ca73e26e5514d4_prof);

        
        $__internal_352c23d5f3341795ff4f5dd4092c719e7abe09cd7a8ef276b33f675a3a7359c4->leave($__internal_352c23d5f3341795ff4f5dd4092c719e7abe09cd7a8ef276b33f675a3a7359c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
